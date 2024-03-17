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

    public function createClient()
    {
        $result = $this->client->createClient();
        return $result;
    }
}
