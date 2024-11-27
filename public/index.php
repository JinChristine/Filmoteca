<?php

declare(strict_types=1); // Déclare le mode strict pour les types de données

require __DIR__ . '/../vendor/autoload.php'; // Chargement de toutes les classes

use App\Core\Router; // Utilise la classe Router de Core

$router = new Router(); //Crée une nouvelle instance de la classe Router
$rep = $router->route(); // Appelle la méthode route() pour gérer les requêtes entrantes

//Configuration de l'environnement Twig
// Définir le chemin vers les templates
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../src/templates'); 

// Créer l'environnement Twig
$twig = new \Twig\Environment($loader);

// Passer des variables à Twig et afficher un template pour la liste des films
echo $twig->render('films.html.twig', ['films'=>$rep]);
// Passer des variables à Twig et afficher un template pour un film en particulier
echo $twig->render('readFilm.html.twig', ['film'=>$rep]);