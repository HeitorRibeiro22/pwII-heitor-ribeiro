<?php

$host = 'localhost';
$dbname = 'cadastrodb';
$username = 'root';
$password = '';

try {
    $conexao = new PDO("mysql:host=localhost;dbname=cadastrodb", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>

