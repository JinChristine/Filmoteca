<?php
namespace App\Repository;

public class FilmRepository
{

    $dsn = "mysql:dbname=filmoteca;host=127.0.0.1";
    $user = "filmoteca_user";
    $password = "filmoteca_password";
    $dbh= new PDO($dsn, $user, $password);

    // Ajouter un film
    public function addFilm(Film $film)
    {
        $sql = query("INSERT INTO film() VALUES ()");
        $sth = $dbh->exec($sql);
    }
    // Lire un film
    public function getFilm(int $id)
    {
        $sql = 'SELECT * FROM film';
        foreach($dbh->query($sql) as $row)
        {
            if ($row['id'] == $id){
                echo $row['id']. ' '.$row['title']. ' '. $row['year']. ' by '. $row['director'];
            }
        }
        return null;
    }
    // Mettre à jour un film
    public function updateFilm(int $id, string $title, string $year, string $genre, string $synopsis, string $director, string $created_at)
    {
        
        $sql = 'UPDATE film SET '
        foreach($this->films as $film)
        {
            if ($film.getId() == $id){
                $film->setTitle($title);
                $film->setDirector($director);
                $film->setYear($year);
                $film->setGenre($genre);
                $film->setSynopsis($synopsis);
                $film->setCreated($created_at);
            }
        }
        return null;
    }
    // Lire tous les films
    public function getAllFilms()
    {
        return $this->films;
    }
    // Supprimer un film
    public function deleteFilm(int $id)
    {   
        foreach($this->films as $film){
            if(!$film.getId() == $id){
                echo "Id invalide";
            return;
            }
        }
        $this->films = array_filter($this->films, function (Film $film) use ($id)); // array_filter cache un film de la liste de film
    }

    
}
?>