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

    public function getClient($num_documento)
    {
        $sql = "SELECT * FROM clientes WHERE numero_documento=?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param(
            "i",
            $num_documento
        );
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $client = $result->fetch_assoc();
            return $client;
        } else {
            echo "Error";
            die();
        }
    }

    public function createClient($tipo_documento, $num_documento, $nombre, $direccion, $telefono, $email, $nombre_contacto)
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
            $tipo_documento,
            $num_documento,
            $nombre,
            $direccion,
            $telefono,
            $email,
            $nombre_contacto
        );
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
            die();
        }
    }

    public function updateClient($tipo_documento, $num_documento, $nombre, $direccion, $telefono, $email, $nombre_contacto)
    {
        $sql = "UPDATE clientes SET
                                tipo_documento = ?,
                                nombre = ?,
                                direccion = ?,
                                telefono = ?, 
                                email = ?, 
                                nombre_contacto = ?
                        WHERE numero_documento = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param(
            "ssssssi",
            $tipo_documento,
            $nombre,
            $direccion,
            $telefono,
            $email,
            $nombre_contacto,
            $num_documento
        );
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
            die();
        }
    }

    public function deleteClient($num_documento)
    {
        $sql = "DELETE FROM clientes WHERE numero_documento=?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param(
            "i",
            $num_documento
        );
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
            die();
        }
    }
}
