<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teste</title>
</head>

<body>
<?php

	//variável inteiro
	$a=10;
    $b=5;
	
	//variável string - texto
	$nome='José';
	$nome1='Ana';
	
	//imprimindo na tela
	echo "O valor de A é: $a <br>";
	echo "O valor de B é: $b <br>";
	echo "O primeiro nome é: $nome <br>";
	echo "O segundo nome é: $nome1 <br>";
	
	echo "<p> Numericas: $a e $b </p>";
	echo "String ou Texto: ".$nome." e $nome1 <br>";
	
	//recebe
	$soma = $a + $b;
	$media = $soma / 2;
	$subtracao = $a - $b;
	$divisao = $a / $b;
	$multiplicacao = $a * $b;
	
	//imprimir os resultados
	echo "<p>Soma: $soma <br>";
	echo "Subtração: $subtracao <br>";
	echo "Média: $media <br>";
	echo "Divisão: $divisao <br>";
	echo "Multiplicação: $multiplicacao <br></p>";
	
	//condição IF
	if ($a > $b) {
		echo "A é maior que B";
	}else{
		echo "B é maior que A";
	}
	

?>
</body>
</html>