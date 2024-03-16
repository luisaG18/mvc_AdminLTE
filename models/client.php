<?php
require_once "connect.php";

class Client
{
    //private $mysqli;

    /*  public function __construct()
    {
        $this->mysqli = $this->connect();
    } */

    public static function getClients()
    {
        $mysqli = Connect::connect();
        $sql = "SELECT * FROM clientes";
        $result = $mysqli->query($sql);

        if ($result) {
            $clients = $result->fetch_all(MYSQLI_ASSOC);
            return $clients;
        } else {
            echo "Error";
        }
    }
}
