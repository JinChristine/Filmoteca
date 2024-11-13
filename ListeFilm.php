<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Accueil.css"/>
</head>
<body>
    <header>
    <nav class="crumbs">
            <ol>
              <li class="crumb"><a href="Accueil-Filmoteca.php" class="lien">Accueil</a></li>
              <li class="crumb"><a href="CRUD.php" class="lien">CRUD</a></li>
              <li class="crumb"><a href="ListeFilm.php" class="lien">Liste des films</a></li>
            </ol>
          </nav>
        <h1>Liste de films </h1>
    </header>
    <form action="" methode="POST">
        <?php
        include("data.php");
        $idcon = new mysqli($host, $user, $mdp, $bdd);
        $sql = "SELECT * FROM movie";
        $result = $idcon->query($sql);
        echo "<table border = '2'> ";
        echo "<tr><th>id</th> <th>title</th> <th>year</th> <th>synopsis</th> <th>director</th> <th>created_at</th> <th>deleted_at</th> <th>genre</th></tr>";
        while ($ligne = $result->fetch_object()) {
            echo "<tr><td>" . $ligne->id . "</td><td>" . $ligne->title . "</td><td>" . $ligne->year . "</td><td>" . $ligne->synopsis . "</td><td>" . $ligne->director . "</td><td>" . $ligne->created_at . "</td><td>" . $ligne->deleted_at . "</td><td>" . $ligne->genre . "</td></tr>";
        }
        echo "</table>";
        $idcon->close();
        ?>
    </form>

    <a href="CRUD.php"><button>Retour</button></a>
</body>
<footer>
    <p>Filmoteca | 2024</p>
</footer>

</html>