<?php

require_once "config.php";

class Connect
{
    public static function connect()
    {
        // Connect to the database
        $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

        if ($mysqli->connect_error) {
            echo "Error en la conexión: " . $mysqli->connect_error;
            exit();
        }
        return $mysqli;
    }
}
