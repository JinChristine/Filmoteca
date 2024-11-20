<?php

namespace App\Entity;

class Film
{
    private int $id;
    private string $title;
    private string $director;
    private string $year;
    private string $created_at;
    private string $genre;
    private string $synopsis;
    private string $deleted_at;
    private string $updated_at;

    public function __construct(int $id, string $title, string $director, string $genre, string $year, string $synopsis, string $created_at, string $deleted_at, string $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->created_at = $created_at;
        $this->deleted_at = $created_at;
        $this->updated_at = $updated_at;

    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function getGenre()
    {
        return $this->genre;
    }
    public function getCreated()
    {
        return $this->created_at;
    }

    public function getDeleted()
    {
        return $this->deleted_at;
    }
    public function getUpdated()
    {
        return $this->updated_at;
    }

    // Setters
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDirector(string $director)
    {
        $this->director = $director;
    }
    public function setYear(string $year)
    {
        $this->year = $year;
    }

    public function setGenre(string $genre)
    {
        $this->genre = $genre;
    }
    
    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;
    }
    
    public function setCreated(string $created_at)
    {
        $this->created_at = $created_at;
    }

    public function setDeleted(string $deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }

    public function setUpdated(string $updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
