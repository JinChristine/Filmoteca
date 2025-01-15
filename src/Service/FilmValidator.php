<?php

declare(strict_types=1); //conversion non permise, ex: 3+"3"=> pas possible

namespace App\Service;

class FilmValidator
{
    public function isValid(array $data, string $entityClass): bool
    {
        if (empty($data['title']) || empty($data['year']) || empty($data['type']) || empty($data['director']) || empty($data['synopsis'])) 
        {
            echo "Tous les champs sont obligatoires.";
            return false;
        }
        return true;
    }
}
?>