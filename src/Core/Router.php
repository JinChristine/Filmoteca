<?php

namespace App\Core;

class Router
{
    public function route()
    {
        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        var_dump($uri);
        
        // Découpe l'URI pour obtenir la route et l'action
        $parts = explode('/', $uri); // Exemple: ['films', 'create']

        var_dump($parts);
        
        $route = $parts[0] ?? null; // 'films'
        $action = $parts[1] ?? null; // 'create', ou 'index' par défaut

        // Récupère les paramètres de la query string (comme ?id=12&name=Inception)
        $queryParams = $_GET;

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
        ];

        if (array_key_exists($route, $routes)) {
            // Crée dynamiquement le contrôleur
            $controllerName = 'App\\Controller\\' . $routes[$route];
            if (!class_exists($controllerName)){
                echo "Controller '$controllerName' not found";
                return;
            }
            $controller = new $controllerName();

            // Vérifie si la méthode existe dans le contrôleur
            if (method_exists($controller, $action)){
                $queryParams = $_GET; // Récupère les paramètres éventuels
                $controller ->$action($queryParams); // Appelle la méthode dynamique
            } else {
                echo "Action '$action' not found in $controllerName";
            }
            // Appelle une méthode spécifique avec les paramètres de la requête (par exemple, index())
            //$controller->index($queryParams); // On passe les paramètres à la méthode index()
        } else {
            // Page non trouvée
            echo "404 Not Found";
        }
    }
}    
?>