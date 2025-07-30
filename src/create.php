<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $qty  = $_POST['quantity'] ?? 0;

    if ($name && $qty) {
        $stmt = $pdo->prepare('INSERT INTO items (name, quantity) VALUES (?, ?)');
        $stmt->execute([$name, $qty]);
        echo "Item guardado correctamente.";
    } else {
        echo "Datos incompletos.";
    }
}
?>
