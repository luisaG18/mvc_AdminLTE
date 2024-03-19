<?php

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'list';
session_name("TOAST");
session_start();

switch ($action) {
    case 'create':
        require_once "controllers/clientController.php";
        $clientController = new ClientController();
        $result = $clientController->createClient();
        if ($result) {
            $_SESSION["name"] = "creationSuccess";
            header('Location: /mvc_AdminLTE/?action=list');
        } else {
            $error = "Error al crear el usuario";
            echo $error;
        }
        break;
    case 'update':
        require_once "controllers/clientController.php";
        $clientController = new ClientController();
        $result = $clientController->updateClient();
        if ($result) {
            $_SESSION["name"] = "updateSuccess";
            header('Location: /mvc_AdminLTE/?action=list');
        } else {
            $error = "Error al actualizar el usuario";
            echo $error;
        }
        break;
    case 'delete':
        require_once "controllers/clientController.php";
        $clientController = new ClientController();
        $result = $clientController->deleteClient();
        if ($result) {
            $_SESSION["name"] = "eliminationSuccess";
            header('Location: /mvc_AdminLTE/?action=list');
        } else {
            $error = "Error al eliminar el usuario";
            echo $error;
        }
        break;
    case 'list':
    default:
        require_once "controllers/template.php";
        $template = new TemplateController();
        $template->template();
        break;
}
