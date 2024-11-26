<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\FilmRepository;
use App\Entity\Film;

class FilmController // Intermédiaire entre le modèle et la vue
{
    public function list()
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
        require __DIR__ . '/../views/listView.php'; // inclure le contenu de listView ici
        
    }

    public function create(array $params)
    {
        /*
        if (!isset($params['id']) && !isset($params['title']) && !isset($params['year']) && !isset($params['genre']) && !isset($params["synopsis"]) && !isset($params['director']) && !isset($params['created_at'])){
            echo "Données incomplètes, création du film échoué";
        }
        else {
            $film = new Film ((int)$params['id'], $params['title'], $params['year'], $params['genre'], $params["synopsis"], $params['director'], $params['created_at']);
            $this->filmModel->addFilm($film);
            echo "Création du film" . $params['title'];

        }
        */
        echo "Création d'un film";
    }

    public function read(array $params)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int)$params['id']);
        require __DIR__ .'/../views/readView.php';
    }


    public function update(array $params)
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
        echo "Mise à jour d'un film";
    }

    public function delete(array $params)
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
        echo "Suppression d'un film";
    }
}


?>