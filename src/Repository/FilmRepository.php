<?php
namespace App\Repository;
use App\Core\DatabaseConnection;

public class FilmRepository
{
    private \PDO $db;

    public function __contruct (){
        $this->db = DatabaseConnection::getConnection();
    }

    public function findAll(): array
    {
        $query = 'SELECT * FROM film';
        $stmt = $this->db->query($query);

        return $stmt->fetchAll();
    }
/*
    // Ajouter un film
    public function addFilm(Film $film)
    {  
    }

    // Lire un film
    public function getFilm(int $id)
    {
        
    }
    // Mettre à jour un film
    public function updateFilm(int $id, string $title, string $year, string $genre, string $synopsis, string $director, string $created_at)
    {
    }
    // Lire tous les films
    public function getAllFilms()
    {
        return $this->films;
    }
    // Supprimer un film
    public function deleteFilm(int $id)
    {
    }
*/
    
}
?>