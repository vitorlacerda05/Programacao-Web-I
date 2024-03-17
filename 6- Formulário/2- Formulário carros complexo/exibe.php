<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		body {
			background-color:#0FF;
		}
	</style>
</head>
<body>
	<?php
	
	echo "<h1>Exibição do Cadastro:</h1>";
	
	//receber dados do formulário
	$placa = $_REQUEST["placa"];
	
	//exibir dados do formulário
	echo "<p><strong>Placa</strong>: $placa</p>";
	
	$modelo = $_REQUEST["modelo"];
	echo "<p><strong>Modelo</strong>: $modelo</p>";
	
	$ano = $_REQUEST["ano"];
	echo "<p><strong>Ano</strong>: $ano</p>";
	
	$valor = $_REQUEST["valor"];
	echo "<p><strong>Valor</strong>: $valor</p>";
	
	$motorista = $_REQUEST["motorista"];
	echo "<p><strong>Motorista</strong>: $motorista</p>";
	
	$email = $_REQUEST["email"];
	echo "<p><strong>Email</strong>: $email</p>";
	
	$motor = $_REQUEST["motor"];
	echo "<p><strong>Motor</strong>: $motor</p>";
	
	$combustivel = $_REQUEST["combustivel"];
	echo "<p><strong>Combustível</strong>: $combustivel</p>";
	
	echo "<hr>";
	
	//exibir código do Checkbox
	
	echo "<p><h3>Opcionais:</h3></p>";
	$op1 = (!empty($_REQUEST["op1"])) ? $_REQUEST["op1"] : 'Qualquer um';
	echo "<strong>Opcional1:</strong> $op1<br>";
	$op2 = (!empty($_REQUEST["op2"])) ? $_REQUEST["op2"] : 'Qualquer um';
	echo "<strong>Opcional2:</strong> $op2<br>";
	$op3 = (!empty($_REQUEST["op3"])) ? $_REQUEST["op3"] : 'Qualquer um';
	echo "<strong>Opcional3:</strong> $op3<br>";
	$op4 = (!empty($_REQUEST["op4"])) ? $_REQUEST["op4"] : 'Qualquer um';
	echo "<strong>Opcional4:</strong> $op4<br>";
	$op5 = (!empty($_REQUEST["op5"])) ? $_REQUEST["op5"] : 'Qualquer um';
	echo "<strong>Opcional5:</strong> $op5<br>";
	
	echo "<p><hr></p>";
?>

	<form name="form" method="post" action="formulario.php">
	<p> <input type="submit" name="btnVoltar" value="Voltar"></p>
    </form>
</body>
</html>