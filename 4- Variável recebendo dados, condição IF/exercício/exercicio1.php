<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teste</title>
</head>

<body>
<?php
	$sal = 800;
	
	if ($sal < 500) {
		$a1 = 200;
		$salf = $sal + $a1;
		
	}
	
	if (($sal >= 500) and ($sal < 1000)) {
		$a1 = 100;
		$salf = $sal + $a1;
	}
	
	if (($sal >= 1000) and ($sal < 2000)) {
		$a1 = 60;
		$salf = $sal + $a1;
	}
		
	if ($sal >= 2000) {
		$a1 = 0;
		$salf = $sal + 0;
	}
	
	echo "Valor do salário inicial: $sal<br>";
	echo "Valor do aumento: $a1<br>";
	echo "Valor do salário final: $salf";



?>


</body>
</html>