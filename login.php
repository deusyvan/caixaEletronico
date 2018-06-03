<?php 
session_start();

if(isset($_SESSION['agencia']) && empty($_SESSION['agencia']) == FALSE){
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);
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