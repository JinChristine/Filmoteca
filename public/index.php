<!DOCTYPE html>
<html>
    <?php
    // $_SERVER['REQUEST_URI']: le chemin de l'URL
    $uri = $_SERVER['REQUEST_URI'];
    $page = trim($uri, '/');

    echo var_dump($page);
    if (isset($page)) {
        if ($page == "Liste%20de%20films") {
            include "../ListeFilm.php";
        } 
        include "../$page.php";
    } 
    else {
        include "../Accueil-Filmoteca.php";
    }
       
    ?>
</html>