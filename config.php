<?php
try {
    $pdo = new PDO("mysql:dbname=caixa;host=localhost", "admin", "admin");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}