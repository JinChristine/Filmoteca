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
            <label for="image"> Image: </label>
            <input type="file" name="image" required/>

            <label for="titre"> Titre: </label>
            <input type="text" name="titre" required/>
            <label for="genre"> Genre: </label>
            <input type="text" name="genre" required/>
            <label for="annee"> Année: </label>
            <input type="text" name="annee" required/>
            <label for="synopsys"> Synopsis: </label>
            <input type="text" name="synopsis" required/>
        </form>
        <a href = "CRUD.html"><button>Retour</button></a>

    </body>
</html>