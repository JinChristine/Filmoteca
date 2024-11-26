<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Lecture d'un film</h1>
    </header>

    <?php
        echo "<table border=1>";
        echo "<tr><th>Title</th><th>Year</th><th>Type</th><th>Director</th><th>Synopsis</th><th>CreatedAt</th><th>UpdatedAt</th><th>DeletedAt</th></tr>";
        echo "<tr><td>". $film->getTitle()."</td><td>". $film->getYear()."</td><td>". $film->getType() ."</td><td>". $film->getDirector() ."</td><td>". $film->getSynopsis()."</td><td>". $film->getCreatedAt()->format('Y-m-d H:i:s')."</td><td>". $film->getUpdatedAt()->format('Y-m-d H:i:s')."</td>";
        $deteted= $film->getDeletedAt();
        if($deteted == null){
            echo "<td></td>";
        }
        else {
            echo "<td>".$deteted."</td>";
        }
        echo "</tr></table>";
    ?>
</body>
</html>