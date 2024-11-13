<!DOCTYPE html>
<html>
<?php
/* //Méthode 1: en PHP
// $_SERVER['REQUEST_URI']: le chemin de l'URL
$uri = $_SERVER['REQUEST_URI'];

echo var_dump($uri);
$pagesAutorisees = ['Accueil-Filmoteca', 'CRUD', 'ListeFilm'];

if (in_array($uri, $pagesAutorisees)) {
    include "$uri.php";
} else {
    include '../Accueil-Filmoteca.php';
}
*/

//Méthode 2: en POO
require("./../Routeur.php");
$objet = new Routeur();
$objetView = $objet->route();
$pagesAutorisees = ['Accueil-Filmoteca', 'CRUD', 'ListeFilm'];
if (in_array($ojetView, $pagesAutorisees)) {
    include "./../$objetView.php";
} else {
    include '../Accueil-Filmoteca.php';
}
echo $objetView ;
?>

</html>