<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acesso</title>
<style>
body{
	text-align:center;
}
fieldset { width: 400px; }

p { text-align:left; }

</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

<div align="center">

<fieldset>

<form name="Form" method="post" action="">


<p><label> Nome: </label>
<input type="text" name="nome"></p>

<p><label> Disciplina: </label></p>
<p><input type="radio" name="disciplina" value="PW-1">PW-1</p>
<p><input type="radio" name="disciplina" value="Matemática">Matemática</p>
<p><input type="radio" name="disciplina" value="Física">Física</p>

<p><label> Nota 1: </label>
<input type="text" name="nota1" size="3"></p>
<p><label> Nota 2: </label>
<input type="text" name="nota2" size="3"></p>
<p><label> Nota 3: </label>
<input type="text" name="nota3" size="3"></p>
<p><label> Nota 4: </label>
<input type="text" name="nota4" size="3"></p>

<p><input type="checkbox" name="sub" value="Sim"> Prova Substitutiva ? Sim/Não</p>

<input type="submit" name="btnBotao" value="Gravar">

</form>

</fieldset>

</div>


</body>
</html>

<?php
	
	//RECEBIMENTO DE DADOS
	if(isset($_REQUEST["btnBotao"])) {
    
		$nome = $_REQUEST["nome"];
		
		$disciplina = $_REQUEST["disciplina"];
			 
		$nota1 = $_REQUEST["nota1"];	
		$nota2 = $_REQUEST["nota2"];
		$nota3 = $_REQUEST["nota3"];
		$nota4 = $_REQUEST["nota4"];
		
		$sub=(!empty($_REQUEST["sub"])) ? $_REQUEST["sub"]:'';
		
		
		
	//BLOCO DE CONTROLE	
		try{			
			//conexão com o BD
			require_once "conexao.php";
			
			//codigo para gravar os dados no BD ***INSERT***
			$insert = $conn->prepare("INSERT INTO formulario(idformulario, nome, disciplina, nota1, nota2, nota3, nota4, sub)						
									VALUES(:idformulario, :nome, :disciplina, :nota1, :nota2, :nota3, :nota4, :sub)");
			
			//valores de referencia
			
			$insert->bindValue(':idformulario', null);
			$insert->bindValue(':nome',$nome);
			$insert->bindValue(':disciplina',$disciplina);
			$insert->bindValue(':nota1',$nota1);
			$insert->bindValue(':nota2',$nota2);
			$insert->bindValue(':nota3',$nota3);
			$insert->bindValue(':nota4',$nota4);
			$insert->bindValue(':sub',$sub);
			
			//executando comando SQL
			
	$insert->execute();
				
			if ($insert) {
				echo "<script> 
				swal({

				title: 'Dados Gravados com Sucesso!',
				text: '',
				icon: 'success',
				button: 'OK',
				}).then(function() {
				window.location = 'formulario.php';
				});

			</script>";
		}
			
		$conn = null;
						
	} catch (PDOException $erro){
		
		echo "<script> 
			swal({
								
			title: 'Erro ao Gravar os Dados!',
			text: '',
			icon: 'error',
			button: 'OK',
			}).then(function() {
			window.location = 'formulario.php';
			});
				
		</script>";
	
echo $erro->getMessage();}
	
}
	
?>