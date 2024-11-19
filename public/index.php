<?php

require __DIR__ . '/../vendor/autoload.php'; // Chargement de toutes les classes

use App\Core\Router; // Utilise la classe Router de Core

$router = new Router();
$router->route();
