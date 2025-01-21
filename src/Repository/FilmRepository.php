<?php

declare(strict_types=1);

namespace App\Repository;
use App\Entity\Film;
use App\Core\DatabaseConnection;
use App\Service\EntityMapper;

class FilmRepository
{
    private \PDO $db; // Instance de connexion à la base de données
    private EntityMapper $entityMapperService; // Service pour mapper les entités
    private FilmValidator $validator;

    public function __construct (){
       // Initialise la connexion à la base de données en utilisant DatabaseConnection
       $this->db = DatabaseConnection::getConnection();
       // Initialise le service de mappage des entités
       $this->entityMapperService = new EntityMapper();
    }

    // Méthode pour récupérer tous les films de la base de données
    public function findAll(): array
    {
        // Requête SQL pour sélectionner tous les films
        $query = 'SELECT * FROM film';
        // Exécute la requête et récupère le résultat
        $stmt = $this->db->query($query);
        // Récupère tous les films sous forme de tableau associatif
        $films = $stmt->fetchAll();

        // Utilise le service de mappage pour convertir les résultats en objets Film
        return $this->entityMapperService->mapToEntities($films, Film::class);
        }

    // Ajouter un film
    public function addFilm(Film $film): void
    {  
        $query = "INSERT INTO film(title, year, synopsis, director, created_at, deleted_at, type) VALUES (:title, :year, :synopsis, :director, :created_at, :deleted_at, :type)";
        $result = $this->db->prepare($query);
            
        // Liaison des paramètres de la requête avec les attributs de de l'objet Film
        $result->bindValue(':title', $film->getTitle());
        $result->bindValue(':year', $film->getYear());
        $result->bindValue(':synopsis', $film->getSynopsis());
        $result->bindValue(':director', $film->getDirector());
        $result->bindValue(':created_at', $film->getCreatedAt()->format('Y-m-d H:i:s'));
        $result->bindValue(':deleted_at', $film->getDeletedAt() ? $film->getDeletedAt()->format('Y-m-d H:i:s') : null);
        $result->bindValue(':type', $film->getType());
            
        $result->execute();
    }


    // Méthode pour récupérer un film par son identifiant
    public function find(int $id): Film
    {
        // Requête SQL pour sélectionner un film par son identifiant
        $query = 'SELECT * FROM film WHERE id = :id';
        // Prépare la requête pour éviter les injections SQL
        $stmt = $this->db->prepare($query);
        // Exécute la requête avec l'identifiant fourni
        $stmt->execute(['id' => $id]);

        // Récupère le film sous forme de tableau associatif
        $film = $stmt->fetch();
        if ($film === false) {
            return null;  // Retournez null si aucun film n'est trouvé
        }
        // Utilise le service de mappage pour convertir le résultat en objet Film
        return $this->entityMapperService->mapToEntity($film, Film::class);
    }

    // Mettre à jour un film
    public function updateFilm(Film $film): void
    {
        $query = "UPDATE film SET title = :title, year = :year, type = :type, synopsis = :synopsis, director = :director, deleted_at = :deleted_at, created_at = :created_at, updated_at = :updated_at  WHERE id = :id";
        $result = $this->db->prepare($query);
        // Liaison des paramètres de la requête avec les attributs de de l'objet Film
        $result->bindValue(':id', $film->getId(), \PDO::PARAM_INT);
        $result->bindValue(':title',$film->getTitle(), \PDO::PARAM_STR);
        $result->bindValue(':year', $film->getYear(), \PDO::PARAM_STR);
        $result->bindValue(':synopsis', $film->getSynopsis(), \PDO::PARAM_STR);
        $result->bindValue(':director', $film->getDirector(), \PDO::PARAM_STR);
        $result->bindValue(':type', $film->getType(), \PDO::PARAM_STR);   
        if($film->getDeletedAt() == null){
            $val = null;
        } else{
            $val = $film->getDeletedAt()->format('Y-m-d H:i:s');
        }
        $result->bindValue(':deleted_at', $val, \PDO::PARAM_STR); 
        $result->bindValue(':created_at', $film->getCreatedAt()->format('Y-m-d H:i:s'), \PDO::PARAM_STR); 
        $result->bindValue(':updated_at', $film->getUpdatedAt() ? $film->getUpdatedAt()->format('Y-m-d H:i:s') : \PDO::PARAM_NULL);         
        $result->execute();
    }

    // Supprimer un film
    public function deleteFilm(int $id): void
    {
        // Préparer la requête SQL de suppression
        $query = "DELETE FROM film WHERE id = :id";
        // Préparer la requête avec PDO
        $result = $this->db->prepare($query);
        // Lier le paramètre :id à la variable $id
        $result->bindValue(':id', $id);
        // Véifier que la requête a bien été exécutée
        $result->execute();
    }
    public function archiveFilm(int $id): void    
    { 
        $film = $this->find($id);
        // Préparer la requête SQL de suppression
        $query = "UPDATE film SET title = :title, year = :year, type = :type, synopsis = :synopsis, director = :director, deleted_at = :deleted_at, created_at = :created_at, updated_at = :updated_at WHERE id = :id";
        $result = $this->db->prepare($query);
        $result->bindValue(':title',$film->getTitle(), \PDO::PARAM_STR);
        $result->bindValue(':year', $film->getYear(), \PDO::PARAM_STR);
        $result->bindValue(':synopsis', $film->getSynopsis(), \PDO::PARAM_STR);
        $result->bindValue(':director', $film->getDirector(), \PDO::PARAM_STR);
        $result->bindValue(':type', $film->getType(), \PDO::PARAM_STR);   
        $deletedAt = (new \DateTime())->format('Y-m-d H:i:s');
        $result->bindValue(':deleted_at',$deletedAt);
        $result->bindValue(':created_at', $film->getCreatedAt()->format('Y-m-d H:i:s'), \PDO::PARAM_STR); 
        if($film->getUpdatedAt() == null){
            $val = null;
        }
        else{
            $val = $film->getUpdatedAt()->format('Y-m-d H:i:s');
        }
        $result->bindValue(':updated_at', $val, \PDO::PARAM_STR);         
        $result->bindValue(':id', $id);
        // Véifier que la requête a bien été exécutée
        $result->execute();
    }
}
?>