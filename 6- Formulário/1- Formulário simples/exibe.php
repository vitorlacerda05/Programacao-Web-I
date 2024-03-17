<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	
	//receber dados do formulário
	$nome = $_REQUEST ["nome"];
	
	//exibir dados do formulário
	echo "<p>Nome: $nome</p>";
	
	$tel = $_REQUEST ["tel"];
	echo "<p>Telefone: $tel</p>";
	
	$email = $_REQUEST ["email"];
	echo "<p>Email: $email</p>";

?>
<body>
</body>
</html>