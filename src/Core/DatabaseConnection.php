<?php
namespace App\Core;

public DatabaseConnection
{
    private static ? \PDO $connection = null;

    private const DB_HOST = "127.0.0.1";
    private const DB_PORT = 3306;
    private const DB_USER = "filmoteca_user";
    private $password = "filmoteca_password";
    private $dbh;
 
}

?>