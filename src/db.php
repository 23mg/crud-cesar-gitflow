<?php
$host = 'localhost';
$db   = 'cruddb';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;ItemDb=$db;charset=utf8";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error DB: ' . $e->getMessage());
}
?>
