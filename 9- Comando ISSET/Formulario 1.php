<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comando ISSET</title>
	<style>
		fieldset {
			width:200px;
			background-color:#FC0;
			
		}
		body {
			background-color:#FFC;
			text-align:left;
		}	
	</style>
</head>
<body>

	<div align="center">
	<fieldset>
    
    
    <legend>Formulário de inscrição</legend>
    
    
	<form name="frm" method="post" action"">
    	<p>Nome: <input type="text" name="nome"></p>
       
       
    <p><h1>Sexo</h1><br>
    <input type="radio" name="sexo" value="masculino">Masculino<br>
    <input type="radio" name="sexo" value="masculino">Feminino<br>
    </p>
    
    <p><h1>Cursos</h1><br>
    <input type="radio" name="curso" value="Direito">Direito<br>
    <input type="radio" name="curso" value="Análise de Sistema">Análise de Sistema<br>
    <input type="radio" name="curso" value="Adiministração">Adiministração<br>
    </p>
    
    <p><h1>Planos</h1><br>
    <input type="checkbox" name="op1" value="Fies"> Fies<br>
    <input type="checkbox" name="op2" value="Bolsa"> Bolsa<br>
    <input type="checkbox" name="op3" value="Prouni"> Prouni<br>
    </p>
    
    <input type="submit" name="BtnCadastrar" value="Cadastrar"> 
    </form>
    </fieldset>
</body>
</html>

<?php 
	
	//comando isset no IF
	if(isset($_REQUEST["BtnCadastrar"])) {
		
		echo "<h2>Recebimento de Dados</h2>";
		
		
        //receber a variavel nome
        $nome = $_REQUEST["nome"];
		$sexo = $_REQUEST["sexo"];
		$curso = $_REQUEST["curso"];
		$op1 = (!empty($_REQUEST["op1"])) ? $_REQUEST["op1"] : '';
		$op2 = (!empty($_REQUEST["op2"])) ? $_REQUEST["op2"] : '';
		$op3 = (!empty($_REQUEST["op3"])) ? $_REQUEST["op3"] : '';
		
        //exibir o conteúdo da variável
        echo "<p><strong> O nome é:</strong> $nome </p>";
		echo "<p><strong> O sexo é:</strong> $sexo </p>";
		echo "<p><strong> O curso é:</strong> $curso </p>";
		echo "<p><strong> Planos:</strong> $op1 $op2 $op3</p>";
	}
	
?>
</div>