<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-primary text-white p-3 mb-4">
        <h1 class="text-center">Liste des films</h1>
    </header>

    <div class="container">
        <!--Début du tableau avec classes Bootstrap-->
            <table class='table table-bordered table-striped table-hover table-sm table-responsive'>
            <thead class='table-dark'><tr><th scope='col'>Title</th><th scope='col'>Year</th><th scope='col'>Type</th><th scope='col'>Director</th><th scope='col'>Synopsis</th><th scope='col'>CreatedAt</th><th scope='col'>UpdatedAt</th><th scope='col'>DeletedAt</th></tr></thead>
            <tbody>
                <tr> 
            <?php
                echo "<td>". $info->getTitle() ."</td>";
                echo "<td>". $info->getYear() ."</td>";
                echo "<td>". $info->getType() ."</td>";
                echo "<td>". $info->getDirector() ."</td>";
                echo "<td>". $info->getSynopsis() ."</td>";
                echo "<td>". $info->getCreatedAt()->format('Y-m-d H:i:s') ."</td>";
                echo "<td>". $info->getUpdatedAt()->format('Y-m-d H:i:s') ."</td>";
                // Vérification si DeletedAt est nul et affichage conditionnel
                $deleted = $info->getDeletedAt();
                if ($deleted === null) {
                echo "<td></td>";
                } else {
                echo "<td>".$deleted->format('Y-m-d H:i:s')."</td>";
                }
            ?>
                </tr>
            </tbody>
            </table>;
    </div>
    </body>
    <footer>
        <p>&copy; 2023 Filmoteca. All rights reserved.</p>
    </footer>
    </html>