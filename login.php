<?php 
session_start();
require 'config.php';

if(isset($_SESSION['agencia']) && empty($_SESSION['agencia']) == FALSE){
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = md5(addslashes($_POST['senha']));
    
    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", @senha);
    $sql->execute();
    
    
    
} 


?>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>
	<form method="POST">
		Agência:<br/>
		<input type="text" name="agencia" /><br/><br/>
		
		Conta:<br/>
		<input type="text" name="conta" /><br/><br/>
		
		Senha:<br/>
		<input type="password" name="senha" /><br/><br/>
		
		<input type="submit" value="Entrar" /><br/><br/>
	</form>
</body>
</html>