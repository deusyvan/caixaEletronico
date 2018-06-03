<?php
try {
    $pdo = new PDO("mysql:dbname=caixa;host=localhost", "admin", "admin");
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}