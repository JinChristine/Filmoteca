<!DOCTYPE html>
<html>
    <head>
        <title> Ajouter un film</title>
    </head>
    <body>
        <header>
            <h1> Quel film voulez-vous ajouter ?</h1>
        </header>
        <form action ="" method = "POST">
            <label for="titre"> Titre: </label>
            <input type="text" name="titre" required/>
            <label for="annee"> Année: </label>
            <input type="text" name="annee" required/>
            <label for="synopsys"> Synopsis: </label>
            <input type="text" name="synopsis" required/>
            <label for="directeur"> Directeur: </label>
            <input type="text" name="directeur" required/>
            <label for="genre"> Genre: </label>
            <input type="text" name="genre" required/>
           
            <button type="submit"> Entrer </button>

        </form>
        <?php
        if (isset($_POST['titre']) && isset($_POST['genre']) && isset($_POST['annee']) && isset($_POST['synopsis']) && isset($_POST['directeur'])) {
            include("data.php");
            $idcon = new mysqli($host, $user, $mdp, $bdd);
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

    </body>
    <footer> <p>Filmoteca | 2024</p> </footer>
</html>