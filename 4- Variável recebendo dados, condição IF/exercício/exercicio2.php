<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercício 2</title>
</head>
<?php

	$n1 = 2;
	$n2 = 6;
	$n3 = 8;
	$n4 = 6;
	
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	
	if (($media >= 0) and ($media < 5)) {
		echo " Sua nota é I ";
	}
	
	if (($media >= 5) and ($media < 8)) {
		echo " Sua nota é B ";
	}
	
	if ($media > 8) {
		echo " Sua nota é MB ";
	}
	
	echo "<p>As 4 notas do aluno:</p>";
	echo "Nota 1: $n1 <br>";
	echo "Nota 2: $n2 <br>";
	echo "Nota 3: $n3 <br>";
	echo "Nota 4: $n4 <br>";
	
	echo "<p> A média do aluno: $media </p>";

?>
<body>
</body>
</html>