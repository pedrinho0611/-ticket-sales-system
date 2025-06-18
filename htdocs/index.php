<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/model/Ticket.php';

$route = $_GET['route'] ?? '';

switch ($route) {
    case 'ticket/create':
        include __DIR__ . '/views/venda.php';
        break;
    case 'ticket/store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $quantidade = intval($_POST['quantidade'] ?? 0);
            $valor_total = $quantidade * 10.00;
            $ticket = new Ticket($pdo);
            $ticket->create($quantidade, $valor_total);
            header('Location: /index.php?route=ticket/success');
            exit;
        }
        break;
    case 'ticket/success':
        include __DIR__ . '/views/success.php';
        break;
    default:
        include __DIR__ . '/views/home.php';
        break;
}
