<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercício 3</title>
</head>
<?php

	$n1 = 2;
	$n2 = 6;
	
	$soma = $n1 + $n2;
	
	if ($soma > 20) {
		$aumento = 8;
		$soma = $soma + $aumento;
	}

	if ($soma <= 20) {
		$aumento = 5;
		$soma = $soma + $aumento;
	}
	
	echo "O numero 1 é: $n1<br>";
	echo "O número 2 é: $n2<br>";
	echo "O aumento é: $aumento<br>";
	echo "A soma é: $soma<br>";
?>
<body>
</body>
</html>