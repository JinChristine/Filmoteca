<?php

namespace App\Entity;

class Film
{
    private int $id;
    private string $title;
    private string $director;
    private int $year;
    private \DateTime $created_at;
    private string $genre;
    private string $synopsis;
    private \DateTime $deleted_at;
    private \DateTime $updated_at;

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
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }
    public function getCreated(): \DateTime
    {
        return $this->created_at;
    }

    public function getDeleted(): \DateTime
    {
        return $this->deleted_at;
    }
    public function getUpdated(): \DateTime
    {
        return $this->updated_at;
    }

    // Setters
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;
        return $this;
    }
    public function setYear(string $year): self
    {
        $this->year = $year;
        return $this;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }
    
    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;
        return $this;
    }
    
    public function setCreated(string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setDeleted(string $deleted_at): self
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function setUpdated(string $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}
