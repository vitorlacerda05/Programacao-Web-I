<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comando ISSET</title>
	<style>
		fieldset {
			width:300px;
			background-color:#FC6;
			border-color:#003;
			border-bottom-width:thick;
			border-left-width:thick;
			border-top-width:thin;
			border-right-width:thin;

		}
		body {
			background-color:#FFC;
			text-align:left;
		
		}	
		div {
			width:250px;
		}
	</style>
</head>
<body>

	<fieldset>
<form name="frm" method="post" action="">
    <p>Opcionais:</p>
    <p><input type="checkbox" name="op1" value=" Ar Condicionado#800.00">Ar Condicionado R$ 800.00</p>
    <p><input type="checkbox" name="op2" value=" Pneu aro 16#1000.00">Pneu aro 16 R$ 1000.00</p>
    <p><input type="checkbox" name="op3" value=" Pintura Metálica#2000.00">Pintura Metálica R$ 2000.00</p>
    <p><input type="checkbox" name="op4" value=" Cambio Automático CVT#1500.00">Cambio Automático CVT R$ 1500.00</p>
    <p><input type="checkbox" name="op5" value=" Direção Hidráulica#1000.00">Direção Hidráulica R$ 1000.00</p>
    
    
    <p>
      <input type="submit" name="BtnMostrar" value="Mostrar">
    </p>
</form>
    </fieldset>
</body>
</html>

	&nbsp;
    
    
<fieldset>

<?php 

	//comando isset no IF
	if(isset($_REQUEST["BtnMostrar"])) {
		
		echo "<h2>Recebimento de Dados</h2>";
		$op1 = (!empty($_REQUEST["op1"])) ? explode("#",$_REQUEST["op1"]) : 0;
		$op2 = (!empty($_REQUEST["op2"])) ? explode("#",$_REQUEST["op2"]) : 0;
		$op3 = (!empty($_REQUEST["op3"])) ? explode("#",$_REQUEST["op3"]) : 0;
		$op4 = (!empty($_REQUEST["op4"])) ? explode("#",$_REQUEST["op4"]) : 0;
		$op5 = (!empty($_REQUEST["op5"])) ? explode("#",$_REQUEST["op5"]) : 0;
		
        //exibir o conteúdo da variável
      
		echo "<p><strong> Opcionais:</strong></p>";
		echo "<p>$op1[0]</p>";
		echo "<p>$op2[0]</p>";
		echo "<p>$op3[0]</p>";
		echo "<p>$op4[0]</p>";
		echo "<p>$op5[0]</p>";
		
		$total = ($op1[1] + $op2[1] + $op3[1] + $op4[1] + $op5[1]);
		echo "<p><strong> Total:</strong> $total </p>";
		
	}
	
?>
</fieldset>