<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comando ISSET</title>
</head>

<body>

	<form name="frm" method="post" action"">
    
    	<p>Nome: <input type="text" name="nome"></p>
        
        <input type="submit" name="BtnCadastrar" value="Cadastrar">
        
    </form>
    
</body>
</html>

<?php 

		//comando isset no IF
		if(isset($_REQUEST["BtnCadastrar"])) {
        	
            //receber a variavel nome
            $nome = $_REQUEST["nome"];
            
            //exibir o conteúdo da variável
            echo "<p> O nome é: $nome </p>";
        }
?>