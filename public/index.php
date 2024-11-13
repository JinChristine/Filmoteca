<!DOCTYPE html>
<html>
<?php
// $_SERVER['REQUEST_URI']: le chemin de l'URL
$uri = $_SERVER['REQUEST_URI'];

echo var_dump($uri);
$pagesAutorisees = ['Accueil-Filmoteca', 'CRUD', 'ListeFilm'];

if (in_array($uri, $pagesAutorisees)) {
    include "$uri.php";
} else {
    include '../Accueil-Filmoteca.php';
}

?>

</html>