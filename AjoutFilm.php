<?php
        if (isset($_POST['title']) && isset($_POST['type']) && isset($_POST['year']) && isset($_POST['synopsis']) && isset($_POST['director'])) {
            include("data.php");
            $idcon = new PDO($host, $user, $mdp, $bdd);
            $titre= ($_POST['titre']);
            $genre = ($_POST['genre']);
            $annee = ($_POST['annee']);
            $synopsis = ($_POST['synopsis']);
            $director = $_POST['directeur'];
            $created_at = date("Y-m-d H:i:s");
            $deleted_at = date("Y-m-d H:i:s");
            $sql = "INSERT INTO movie(title, year, synopsis, director, created_at, deleted_at, genre) VALUES ('$titre', '$annee', '$synopsis', '$director', '$created_at', '$deleted_at', '$genre')";
            $result = $idcon->query($sql);
            if ($result == true){
                echo "Film bien ajouté";
            }
            else {
                echo "erreur d'ajout";
            }
        }

?>
    <a href = "CRUD.php"><button>Retour</button></a>
