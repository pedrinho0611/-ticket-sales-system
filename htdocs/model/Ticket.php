<?php
class Ticket {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($quantidade, $valor_total) {
        $stmt = $this->pdo->prepare("INSERT INTO vendas (quantidade, valor_total) VALUES (?, ?)");
        $stmt->execute([$quantidade, $valor_total]);
    }
}
