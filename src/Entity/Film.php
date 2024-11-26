<?php

declare(strict_types=1);

namespace App\Entity;

class Film
{
    private int $id;
    private string $title;
    private ?int $year = null;
    private string $type;
    private ?string $synopsis = null;
    private ?string $director = null;
    private string $genre;
    private \DateTime $createdAt;
    private ?\DateTime $deletedAt = null;
    private ?\DateTime $updatedAt = null;

    public function __construct(int $id, string $title, string $director, string $genre, int $year, string $synopsis, string $type, \DateTime $created_at, \DateTime $deleted_at, \DateTime $updated_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->type = $type;
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
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function getDeletedAy(): ?\DateTime
    {
        return $this->deletedAt;
    }
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
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
    
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
