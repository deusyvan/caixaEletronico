<?php
try {
    $pdo = new PDO("mysql:dbname=caixa_eletronico;host=localhost", "admin", "admin");
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}