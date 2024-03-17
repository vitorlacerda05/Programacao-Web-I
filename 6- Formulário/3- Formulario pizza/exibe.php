<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		body {
			background-color:#FFC;
		}
		
		h1 {
			text-align:center;
			text-decoration:underline;
		}
		
		h3 {
			color:#F63;
			text-shadow:#000;
			text-align:right;
			font-size:50px;
		}
	</style>
</head>

<body>
<?php

	//Receber as informações do formulário
	
	$pedido = $_REQUEST["pedido"];
	$nome = $_REQUEST["nome"];
	$email = $_REQUEST["email"];
	$telefone = $_REQUEST["telefone"];
	$estado = $_REQUEST["estado"];
	$cidade = $_REQUEST["cidade"];
	$rua = $_REQUEST["rua"];
	$estado = $_REQUEST["estado"];
	$numero = $_REQUEST["numero"];
	$bairro = $_REQUEST["bairro"];
	
	//Tamanhos
	//Explode de campo radio
	
	$tamanho = explode("#",$_REQUEST["tamanho"]);
	
	//Sabores
	//Explode de campo radio
	
	$sabores = explode("#",$_REQUEST["sabores"]);
	
	//Acrescimos
	//Explode de campo checkbox
	
	$op1 = (!empty($_REQUEST["op1"])) ? explode("#",$_REQUEST["op1"]) : 0;
	$op2 = (!empty($_REQUEST["op2"])) ? explode("#",$_REQUEST["op2"]) : 0;
	$op3 = (!empty($_REQUEST["op3"])) ? explode("#",$_REQUEST["op3"]) : 0;
	$op4 = (!empty($_REQUEST["op4"])) ? explode("#",$_REQUEST["op4"]) : 0;
	$op5 = (!empty($_REQUEST["op5"])) ? explode("#",$_REQUEST["op5"]) : 0;
	$op6 = (!empty($_REQUEST["op6"])) ? explode("#",$_REQUEST["op6"]) : 0;
	
	$acrescimos = $op1[0] + $op2[0] + $op3[0] + $op4[0] + $op5[0] + $op6[0];
	
	//Borda Rechada
	//Explode de campo checkbox
	
	$op7 = (!empty($_REQUEST["op7"])) ? explode("#",$_REQUEST["op7"]) : 0;
	
	$borda = $op7;
	
	//Retirada ou entrega
	//Explode de campo checkbox
	
	$op8 = (!empty($_REQUEST["op8"])) ? explode("#",$_REQUEST["op8"]) : 0;
	
	//Exibir as informações do formulário
	
	echo "<h1><strong>Informações do Usuário</strong></h1>";
	
	echo "<strong>- Pedido:</strong> ".$pedido."</p>";
	
	echo "<strong>- Nome:</strong> ".$nome."</p>";
	
	echo "<strong>- Email:</strong> ".$email."</p>";
	
	echo "<strong>- Telefone:</strong> ".$telefone."</p>";
	
	echo "<strong>- Estado:</strong> ".$estado."</p>";
	
	echo "<strong>- Cidade:</strong> ".$cidade."</p>";
	
	echo "<strong>- Bairro:</strong> ".$bairro."</p>";
	
	echo "<strong>- Endereço:</strong> ".$rua."</p>";
	
	echo "<strong>- Numero:</strong> ".$numero."</p>";
	
	echo "<hr>";
	
	echo "<h1><strong>Pizza</strong></h1>";
	
	echo "<h2><strong>  Acréscimos</strong></h2>";
	
	echo "<strong>- Opcional 1:</strong> ".$op1[1]."<br>";
	
	echo "<strong>- Opcional 2:</strong> ".$op2[1]."<br>";
	
	echo "<strong>- Opcional 3:</strong> ".$op3[1]."<br>";
	
	echo "<strong>- Opcional 4:</strong> ".$op4[1]."<br>";
	
	echo "<strong>- Opcional 5:</strong> ".$op5[1]."<br>";
	
	echo "<strong>- Opcional 6:</strong> ".$op6[1]."<br>";
	
	echo "<p><h2><strong>  Tamanho</strong></h2></p>";
	
	echo "<strong> - Tamanho da pizza:</strong> ".$tamanho[1]."<br>";
	
	echo "<p><h2><strong>  Borda Recheada</strong></h2></p>";
	
	echo "<strong> - Opcional 7:</strong> ".$op7[1]."<br>";
	
	echo "<h2><strong>  Retirada ou entrega</strong></h2>";
	
	echo "<strong> - Opcional 8:</strong> ".$op8[1]."<br>";
	
	echo "<p><hr></p>";
	
	//total
	
	$total = $acrescimos + $op7[0] + $op8[0] + $tamanho[0] + $sabores[0];
	
	echo "<h3>Total: <em> R$ ".$total." </em></h3>"; 
	

?>


<p><form name="form" sethod="post" action="index">

<input type="submit" name="btnVoltar" value="voltar"></p>

</form>
</body>
</html>