<?php
require_once __DIR__ . "/../models/client.php";

class ClientController
{
    private $client;

    public function __construct()
    {
        $this->client = new Client;
    }

    public function getClients()
    {
        $clients = $this->client->getClients();
        return $clients;
    }

    public function getClient()
    {
        $client = $this->client->getClient($_GET["id"]);
        return $client;
    }

    public function createClient()
    {
        $result = $this->client->createClient(
            $_REQUEST['tipo_documento'],
            $_POST["numero_documento"],
            $_POST["nombre"],
            $_POST["direccion"],
            $_POST["telefono"],
            $_POST["email"],
            $_POST["nombre_contacto"]
        );
        return $result;
    }

    public function updateClient()
    {
        $result = $this->client->updateClient(
            $_REQUEST['tipo_documento'],
            $_POST["numero_documento"],
            $_POST["nombre"],
            $_POST["direccion"],
            $_POST["telefono"],
            $_POST["email"],
            $_POST["nombre_contacto"]
        );
        return $result;
    }

    public function deleteClient()
    {
        $result = $this->client->deleteClient($_GET["id"]);
        return $result;
    }
}
