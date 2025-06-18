<?php
require_once __DIR__ . '/../model/Ticket.php';
require_once __DIR__ . '/../config/database.php';

class TicketController {
    private $ticket;

    public function __construct($pdo) {
        $this->ticket = new Ticket($pdo);
    }

    public function create() {
        include __DIR__ . '/../views/venda.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $quantidade = intval($_POST['quantidade'] ?? 0);
            $valor_total = $quantidade * 10.00;
            $this->ticket->create($quantidade, $valor_total);
            header('Location: /index.php?route=ticket/success');
            exit;
        }
    }
}
