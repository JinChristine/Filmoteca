<?php
    namespace App\Core;
    
    class TwigEnvironment { //Configuration de l'environnement Twig

        // Définir le chemin vers les templates
        protected $loader;
        // Créer l'environnement Twig
        protected $twig;

        public function __construct(){
            $this->loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../templates');
            $this->twig = new \Twig\Environment($this->loader);
        }
        

    }
    
?>