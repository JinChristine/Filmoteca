<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\FilmRepository;
use App\Entity\Film;
//use App\Twig\Loader\FilesystemLoader;
use App\Core\TemplateRenderer;

class FilmController// Intermédiaire entre le modèle et la vue
{
    private TemplateRenderer $renderer;
    
    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
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
        echo $this->renderer->render('/film/films.html.twig', ['films'=>$films]);
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données envoyées en POST
            $data = $_POST;

            // Validation des données
            if (empty($data['title']) || empty($data['year']) || empty($data['type']) || empty($data['director']) || empty($data['synopsis'])) {
                echo "Tous les champs sont obligatoires.";
                return;
            }

            // Créer une nouvelle entité Film
            $film = new Film();
            $film->setTitle($data['title']);
            $film->setYear($data['year']);
            $film->setType($data['type']);
            $film->setDirector($data['director']);
            $film->setSynopsis($data['synopsis']);
            $film->setCreatedAt(new \DateTime());
            $film->setUpdatedAt(new \DateTime());

            // Sauvegarder le film dans la base de données
            $filmRepository = new FilmRepository();
            $filmRepository->save($film);

            // Rediriger ou afficher un message de succès
            header('Location: /film/list');
            exit;
        }

        // Si la requête est en GET, afficher le formulaire de création
        echo $this->renderer->render('film/createFilm.html.twig', []);
    }

    public function read(array $params): void
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int)$params['id']);
        //require __DIR__ .'/../views/readView.php';
        // Passer des variables à Twig et afficher un template pour un film en particulier
        echo $this->renderer->render('film/readFilm.html.twig', ['film'=>$film]);
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
        $film = $filmRepository->find((int)$params['id']);
        
        if(!$film){
            echo "Film non trouvé";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // On récupère localement l'instance de FilmRepository crée avant dans la méthode
            $filmRepository->updateFilm((int)$params['id'], $_POST['title'], (int)$_POST['year'], $_POST['type'], $_POST['synopsis'], $_POST['director'], $_POST['created_at'], $_POST['deleted_at']?? null);
        }
        
        //Affiche le formulaire avec les données actuelles
        echo $this->renderer->render('film/updateFilm.html.twig', ['film'=>$film]);
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
            // Vérifier que l'ID est présent dans les paramètres
        if (!isset($params['id'])) {
            echo "Id est requis";
            return;
        }

        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int)$params['id']);
        
        if ($film === null) {
            // Si le film n'est pas trouvé
            echo "Film non trouvé.";
            return;
        }
        echo $this->renderer->render('film/deleteFilm.html.twig', ['film'=>$film]);
        if (true){// si le bouton est appuyé
            $filmRepository->deleteFilm((int)$params['id']);
        }
    }
}


?>