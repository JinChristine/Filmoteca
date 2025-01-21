<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\FilmRepository;
use App\Entity\Film;
//use App\Twig\Loader\FilesystemLoader;
use App\Core\TemplateRenderer;
use App\Service\FilmValidator;
use App\Service\EntityMapper;

class FilmController// Intermédiaire entre le modèle et la vue
{
    private TemplateRenderer $renderer;
    private FilmValidator $filmValidatorService;
    private EntityMapper $entityMapperService;
    
    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
        $this->filmValidatorService = new FilmValidator();
        $this->entityMapperService = new EntityMapper();
    }
    
    public function list(): void
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();
        /*
        $filmEntities = [];
        foreach($allFilms as $film){
            $filmEntity = new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setSynopsis($film['synopsis']);
            $filmEntity->setCreatedAt($film['created_at']);
            $filmEntity->setType($film['type']);
            $filmEntity->setUpdatedAt($film{'updated_at'});
        */
        
        //dd($filmEntities);
        /*header('Content-type: application/json');
        echo json_encode($films);*/ 
        //require __DIR__ . '/../views/listView.php'; // inclure le contenu de listView ici

        // Passer des variables à Twig et afficher un template pour la liste des films
        echo $this->renderer->render('film/films.html.twig', ['films'=>$films]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données envoyées en POST
            $data = $_POST;

            // Validation des données
            if($this->filmValidatorService->isValid($data, Film::class)){

                $data = [
                    'title' => isset($_POST['title']) ? htmlspecialchars(trim($_POST['title'])) : null,
                    'year' => isset($_POST['year']) && filter_var($_POST['year'], FILTER_VALIDATE_INT) !== false ? $_POST['year'] : null,
                    'type' => isset($_POST['type']) ? htmlspecialchars(trim($_POST['type'])) : null,
                    'director' => isset($_POST['director']) ? htmlspecialchars(trim($_POST['director'])) : null,
                    'synopsis' => isset($_POST['synopsis']) ? htmlspecialchars(trim($_POST['synopsis'])) : null,
                ];

                // Créer une nouvelle entité Film
                $filmData = $this->entityMapperService->mapToEntity($data, Film::class);

                // Sauvegarder le film dans la base de données
                $filmRepository = new FilmRepository();
                $filmRepository->addFilm($filmData);

                // Rediriger vers la liste des films après l'ajout
                header('Location:/films/list');
                exit;                          
            }
            
        }
        echo $this->renderer->render('film/createFilm.html.twig', []);
    }

    public function read(array $params): void
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($params['id'])){
                $id = (int) $params['id'];    
            }
            else {
                $id = (int) $_POST['id'];
            }
            if ($this->filmValidatorService->isValidId(['id'=>$id], $films)){
                $film = $filmRepository-> find((int)$id);
                echo $this->renderer->render('film/readFilm.html.twig', ['film' => $film]);
            }
        }
        else{
            echo $this->renderer->render('film/read.html.twig', []);
        }
    }


    public function update(array $params): void
    {
        /*
        if (!isset($params['id']) && !isset($params['title']) && !isset($params['year']) && !isset($params['genre']) && !isset($params["synopsis"]) && !isset($params['director']) && !isset($params['created_at'])){
            echo "Données incomplètes, mise à jour du film échoué";
            return;
        }
        else {
            $updated = $this->filmModel->updateFilm((int)$params['id'], $params['title'], $params['year'], $params['genre'], $params["synopsis"], $params['director'], $params['created_at']);
            echo "Mise à jour du film" . $params['title'];
        }
        */
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($params['verif'])) {
            if(isset($params['id'])){
                $id = (int) $params['id'];    
            }
            else {
                $id = (int) $_POST['id'];
            }
            if($this->filmValidatorService->isValidId(['id'=>$id], $films)){
                $film = $filmRepository->find((int)$id);
                if($params['verif'] == 'false'){
                    //Affiche le formulaire avec les données actuelles
                    echo $this->renderer->render('film/updateFilm.html.twig', ['film'=>$film]);
                }
                else{
                    // On affecte les nouvelles valeurs sinon si c'est vide, on garde les anciennes valeurs 
                    if($film->getDeletedAt() == null){
                        $val = null;
                    }
                    else {
                        $val = $film->getDeletedAt()->format('Y-m-d H:i:s');
                    }
                    $data =['id'=>$_POST['id'] ?? $film->getId(),
                    'title'=>$_POST['title'] ?? $film->getTitle(), 
                    'year'=>$_POST['year'] ?? $film->getYear(),
                    'type' => $_POST['type'] ?? $film->getType(),
                    'synopsis' => $_POST['synopsis'] ?? $film->getSynopsis(),
                    'director' => $_POST['director'] ?? $film->getDirector(),
                    'created_at' =>  $film->getCreatedAt()->format('Y-m-d H:i:s'),
                    'deleted_at' => $val,
                    'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $filmData = $this->entityMapperService->mapToEntity($data, Film::class);
    
                    $filmRepository->updateFilm($filmData);
                    
                    header("Location: /films/list"); 
                    exit;
                }
            }        
        }
        else{
            echo $this->renderer->render('film/update.html.twig', []);
        }
    

    }

    public function delete(array $params): void
    {
        /*
        if (!isset($params['id'])){
            echo "Id est requis";
            return;
        }
        else {
            $this->filmModel->deleteFilm((int) $params['id']);
            echo "Suppression du film" . $params['title'];

        }
        */
        /*
        // Vérifier que l'ID est présent dans les paramètres
        if (!isset($params['id'])) {
            echo "Id est requis";
            return;
        }
        */
        $filmRepository = new FilmRepository();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['id'])&& isset($params['verif'])){
                $films = $filmRepository->findAll();
                if($this->filmValidatorService->isValidId($_POST, $films)){
                    $id = (int)$_POST['id'];
                    $film = $filmRepository->find($id);
                    if ($film === null) {
                        // Si le film n'est pas trouvé
                        echo "Film non trouvé.";
                        return;
                    }
                    echo $this->renderer->render('film/deleteFilm.html.twig', ['film'=>$film]);
                    
                    
                }
            } else if(isset($params['id']) && isset($params['verif'])){
                $films = $filmRepository->findAll();
                if($this->filmValidatorService->isValidId(['id'=>$params['id']], $films)){
                    $id = (int)$params['id'];
                    $film = $filmRepository->find($id);
                    if ($film === null) {
                        // Si le film n'est pas trouvé
                        echo "Film non trouvé.";
                        return;
                    }

                    echo $this->renderer->render('film/deleteFilm.html.twig', ['film'=>$film]);
                    
                }
            }
            else if(isset($params['archive'])){
                    /* Suppression du film
                    $filmRepository->deleteFilm((int)$params['id']);
                    */
                    //Archivage du film
                    $filmRepository->archiveFilm((int)$params['id']);
                    header("Location: /films/list"); 
                    exit;
                }
        }
        else{
            echo $this->renderer->render('film/delete.html.twig', []);
        }
        
    }
}


?>