<?php
namespace App\Controller;
use App\Entity\Film;
use App\Repository\FilmRepository;

class FilmController // Intermédiaire entre le modèle et la vue
{
    private FilmModel $filmModel;

    public function __construct()
    {
        $this->filmModel = new FilmModel();
    }

    public function list()
    {
        $films = $this->filmModel->getAllFilms();
        if (empty($films)){
            echo "Pas de films";
            return;
        }
        else {
            echo "Liste des films";
            foreach($films as $film){
                echo $film->getId() . ": " . $film->getTitle() . " by " . $film->getDirector() . "in" . $film->getYear() "<br>";
            }
        }
        
    }

    public function create(array $params)
    {
        if (!isset($params['id']) && !isset($params['title']) && !isset($params['year']) && !isset($params['genre']) && !isset($params["synopsis"]) && !isset($params['director']) && !isset($params['created_at'])){
            echo "Données incomplètes, création du film échoué";
        }
        else {
            $film = new Film ((int)$params['id'], $params['title'], $params['year'], $params['genre'], $params["synopsis"], $params['director'], $params['created_at']);
            $this->filmModel->addFilm($film);
            echo "Création du film" . $params['title'];

        }
    }

    public function read(array $params)
    {
        $id = (int) $params['id'];
        if (!isset($id)){
            echo "Film non trouvée";
            return;
        }            
        else {
            $film = $this->filmModel.getFilm($id);
            echo "Lecture du film".$params['title'];
        }
    }
    public function update(array $params)
    {
        if (!isset($params['id']) && !isset($params['title']) && !isset($params['year']) && !isset($params['genre']) && !isset($params["synopsis"]) && !isset($params['director']) && !isset($params['created_at'])){
            echo "Données incomplètes, mise à jour du film échoué";
            return;
        }
        else {
            $updated = $this->filmModel->updateFilm((int)$params['id'], $params['title'], $params['year'], $params['genre'], $params["synopsis"], $params['director'], $params['created_at']);
            echo "Mise à jour du film" . $params['title'];
        }
    }

    public function delete(array $params)
    {
        if (!isset($params['id'])){
            echo "Id est requis";
            return;
        }
        else {
            $this->filmModel->deleteFilm((int) $params['id']);
            echo "Suppression du film" . $params['title'];

        }
    }
}


?>