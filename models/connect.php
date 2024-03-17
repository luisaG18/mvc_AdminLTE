<?php

require_once "config.php";

class Connect
{
    private $connection;
    private static $instance;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        // Connect to the database
        $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

        if ($mysqli->connect_error) {
            echo "Error en la conexión: " . $mysqli->connect_error;
            exit();
        }
        $this->connection = $mysqli;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new Connect();
        }
        return static::$instance;
    }
}
