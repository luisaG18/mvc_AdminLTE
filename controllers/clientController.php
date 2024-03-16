<?php
require_once "../models/client.php";

class ClientController
{
    public static function getClients()
    {
        $clients = Client::getClients();
        return $clients;
    }
}
