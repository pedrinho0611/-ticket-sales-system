<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$route = $_GET['route'] ?? '';

switch ($route) {
    case 'ticket/create':
        require 'views/venda.php';
        break;
    case 'ticket/store':
        require 'controller/TicketController.php';
        $controller = new TicketController();
        $controller->store();
        break;
    case 'ticket/success':
        require 'views/cart/success.php';
        break;
    default:
        require 'views/home.php';
        break;
}
