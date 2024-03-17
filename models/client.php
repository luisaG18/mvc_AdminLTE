<?php
require_once "connect.php";

class Client
{
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = Connect::getInstance()->getConnection();
    }

    public function getClients()
    {
        $sql = "SELECT * FROM clientes";
        $result = $this->mysqli->query($sql);

        if ($result) {
            $clients = $result->fetch_all(MYSQLI_ASSOC);
            return $clients;
        } else {
            echo "Error";
            die();
        }
    }

    public function createClient()
    {
        $sql = "INSERT INTO clientes 
                            (tipo_documento, 
                            numero_documento, 
                            nombre, 
                            direccion,
                            telefono, 
                            email, 
                            nombre_contacto)
                VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param(
            "sisssss",
            $_REQUEST['tipo_documento'],
            $_POST["numero_documento"],
            $_POST["nombre"],
            $_POST["direccion"],
            $_POST["telefono"],
            $_POST["email"],
            $_POST["nombre_contacto"]
        );
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
