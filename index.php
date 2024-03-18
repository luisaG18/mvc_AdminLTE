<?php

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'list';

switch ($action) {
    case 'create':
        require_once "controllers/clientController.php";
        $clientController = new ClientController();
        $result = $clientController->createClient();
        if ($result) {
            header('Location: /mvc_AdminLTE/?action=list');
        } else {
            $error = "Error al crear el usuario";
            echo $error;
            // require_once 'ruta/del/error.php'
        }
        break;
    case 'update':
        require_once "controllers/clientController.php";
        $clientController = new ClientController();
        $result = $clientController->updateClient();
        if ($result) {
            header('Location: /mvc_AdminLTE/?action=list');
        } else {
            $error = "Error al actualizar el usuario";
            echo $error;
            // require_once 'ruta/del/error.php'
        }
        break;
    case 'delete':
        require_once "controllers/clientController.php";
        $clientController = new ClientController();
        $result = $clientController->deleteClient();
        if ($result) {
            header('Location: /mvc_AdminLTE/?action=list');
        } else {
            $error = "Error al eliminar el usuario";
            echo $error;
            // require_once 'ruta/del/error.php'
        }
        break;
    case 'list':
    default:
        require_once "controllers/template.php";
        $template = new TemplateController();
        $template->template();
        break;
}
