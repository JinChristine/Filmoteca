<!DOCTYPE html>
<html>
    <body>
    <form action ="" methode="POST">
        <p>Liste de films </p>
        <?php
        include ("data.php");
        $idcon = new mysqli($host, $user, $mdp, $bdd);
        $sql = "SELECT * FROM movie";
        $result = $idcon -> query($sql);
        echo "<table border = '2'> ";
        echo "<tr><th>id</th> <th>title</th> <th>year</th> <th>synopsis</th> <th>director</th> <th>created_at</th> <th>deleted_at</th> <th>genre</th></tr>";
        while ($ligne = $result -> fetch_object()){
            echo "<tr><td>". $ligne -> id."</td><td>". $ligne -> title."</td><td>". $ligne -> year."</td><td>"."</td><td>". $ligne -> synopsis."</td><td>". $ligne -> director."</td><td>". $ligne -> created_at."</td><td>". $ligne -> deleted_at."</td><td>"."</td><td>". $ligne -> genre."</td></tr>";
        }
        echo "</table>";
        $idcon -> close();
        ?>
    </form>
    </body>
    <footer>
        <p>Filmoteca | 2024</p>
    </footer>
</html>