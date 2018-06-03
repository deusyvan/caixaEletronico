<?php
session_start();
require 'config.php';

if (isset($_POST['tipo']) && empty($_POST['tipo']) == FALSE) {
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>
	<form method="POST">
		Tipo de transação: <br/>
		<select name="tipo">
			<option value="0">Depósito</option>
			<option value="1">Retirada</option>
		</select><br/><br/>
		
		Valor: <br/>
		<input type="text" name="valor" pattern="[0-9.,]{1,}"/><br/><br/>
		
		<input type="submit" value="Adicionar">
	</form>
</body>
</html>
