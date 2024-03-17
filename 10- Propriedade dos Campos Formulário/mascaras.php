<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		fieldset {
			width:250px;
			border:inset;
		}
		
		body {
			background-color:#FFC;
		}
	</style>
    
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>

	<script>

	//Para aplicar a máscara, as regras são simples:

	// a – Representa qualquer letra (A-Z,a-z)
	// 9 – Representa qualquer número (0-9)
	// * – Representa qualquer caractére alfanumérico (A-Z,a-z,0-9)


	jQuery(function($){

		$("#cpf").mask("999.999.999-99");
		$("#telefone").mask("(99)9999-9999");
		$("#cep").mask("99.999-999"); 
	
		});

	</script>

</head>

<body>
	<div align="center">
	<fieldset>
    <legend>Formulário com Máscaras</legend>
	<form name="frm" method="post" action="action""">
    		<p>CPF	<input type="text" name="cpf" id="cpf"> </p>
            <p>Tel: <input type="text" name="telefone" id="telefone"></p>
            <p>Data: <input type="date" name="data"></p>
            <p>CEP: <input type="text" name="cep" id="cep"></p>
    </form>
    </fieldset>
    </div>
    
</body>
</html>