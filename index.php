<?php 
session_start();
require 'config.php';

if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == FALSE){
    $id = $_SESSION['banco'];
    
    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();
    } else {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}

?>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>
	<h1>Banco XYZ</h1>
	Agência: 0000<br/>
	Conta: 0000<br/>
	<a href="sair.php">Sair</a>
</body>
</html>
