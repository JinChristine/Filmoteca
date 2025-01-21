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
    public function isValidId(array $data, array $films): bool
    {
        if (!is_numeric($data['id']) || (int)$data['id'] <= 0 || (int) $data['id'] > sizeof($films)) {
            echo "Identifiant invalide ou manquant.";
            return false;
        }
        return true;
    }
}
?>