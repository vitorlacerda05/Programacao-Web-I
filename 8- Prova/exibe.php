<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>exibe</title>
<style>
body{
	background-color:#FFC;
}

</style>
</head>

<body>
<?php

	$nome = $_REQUEST["nome"];
	$email = $_REQUEST["email"];
	$celular = $_REQUEST["celular"];
	$cpf = $_REQUEST["cpf"];
	$nascimento = $_REQUEST["nascimento"];
	$cep = $_REQUEST["cep"];
	$estado = $_REQUEST["estado"];
	$cidade = $_REQUEST["cidade"];

	$curso = explode("#",$_REQUEST["curso"]);
	
	$sn = $_REQUEST["sn"];
	
	$op1 = (!empty($_REQUEST["op1"])) ? explode("#",$_REQUEST["op1"]) : 0;
	$op2 = (!empty($_REQUEST["op2"])) ? explode("#",$_REQUEST["op2"]) : 0;
	$op3 = (!empty($_REQUEST["op3"])) ? explode("#",$_REQUEST["op3"]) : 0;
	$op4 = (!empty($_REQUEST["op4"])) ? explode("#",$_REQUEST["op4"]) : 0;
	
	$op5 = (!empty($_REQUEST["op5"])) ? $_REQUEST["op5"] : "";
	$op6 = (!empty($_REQUEST["op6"])) ? $_REQUEST["op6"] : "";
	$op7 = (!empty($_REQUEST["op7"])) ? $_REQUEST["op7"] : "";
	$op8 = (!empty($_REQUEST["op8"])) ? $_REQUEST["op8"] : "";
	
	//Horário
	$horario = $_REQUEST["horario"];

	//Termos
	$op9 = $_REQUEST["op9"];
	
	
	//Exibir no echo
	
	
	echo "<h1>Dados Pessoais</h1>";
	echo "<hr>";
	
	echo "<strong>Nome:</strong> ".$nome."</p>";
	echo "<strong>Email:</strong> ".$email."</p>";
	echo "<strong>Celular:</strong> ".$celular."</p>";
	echo "<strong>CPF:</strong> ".$cpf."</p>";
	echo "<strong>Data de Nascimento: </strong> ".$nascimento."</p>";
	echo "<strong>CEP: </strong> ".$cep."</p>";
	echo "<strong>Estado: </strong> ".$estado."</p>";
	echo "<strong>Cidade: </strong> ".$cidade."</p>";
	
	echo "<hr>";
	
	echo "<h2><strong>Graduação que pretende Cursar:</strong></h2>";
	echo "<strong>Curso: </strong>".$curso[1]."<br>";
	echo "<strong>Já possí algum curso Superior:</strong> ".$sn." <br>";
	
	echo "<hr>";
	
	echo "<h3>Mini Cursos que pretende cursar?</h3>";
	echo "<p>$op1[1]</p>";
	echo "<p>$op2[1]</p>";
	echo "<p>$op3[1]</p>";
	echo "<p>$op4[1]</p>";
	$mc = $op1[0] + $op2[0] + $op3[0] + $op4[0];
	
	echo "<hr>";
	
	echo "<h3>Disciplinas Opcionais</h3>";
	echo "<p>$op5</p>";
	echo "<p>$op6</p>";
	echo "<p>$op7</p>";
	echo "<p>$op8</p>";
	$dp = $op5 + $op6 + $op7 + $op8;
	
	echo "<hr>";
	
	echo "<h2><strong>Horário</strong></h2>";
	echo "$horario";
	
	echo "<hr>";
	
	echo "<h3>Termos</h3>";
	echo "$op9";
	
	echo "<hr>";
	
	echo "<h3>Total</h3>";
	$total = $curso[0] + $dp + $mc;
	echo "<h3>".$total."</h3>";
	
?>


<p><form name="form" sethod="post" action="index">

<input type="submit" name="btnVoltar" value="voltar"></p>

</form>