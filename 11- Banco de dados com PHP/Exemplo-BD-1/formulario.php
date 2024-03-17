<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>isset</title>
<style>

	h3{
		text-align:center;
		font-family:Verdana, Geneva, sans-serif;
		font-size:17px;
		text-shadow:2px 2px #666666;
		color:#FC0;
	}

	fieldset{
		text-align:left;
		height:450px;
		width:200px;
		background-color:#FFC;
		border:ridge;
	}


</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<h3>Formulário de Inscrição</h3>

<div align="center">

<fieldset>

<form name="frm" method="post" action="">

	<p>Nome: <input type="text" name="nome"></p>
    
    <p>E-mail: <input type="email" name="email"></p>
    
<hr>
    
    <p>Sexo:<br>
    	<input type="radio" name="sexo" value="Feminino">Feminino<br>
        <input type="radio" name="sexo" value="Masculino">Masculino<br>
    </p>
     <p>Cursos:<br>
     	<input type="radio" name="cursos" value="Direito">Direito<br>
        <input type="radio" name="cursos" value="Análise de Sistema">Análise de Sistem<br>
        <input type="radio" name="cursos" value="Administração">Administração<br>
    </p>
    <p>Planos:<br>
    	<input type="checkbox" name="plano1" value="Fies">Fies<br>
        <input type="checkbox" name="plano2" value="Bolsa">Bolsa<br>
        <input type="checkbox" name="plano3" value="Prouni">Prouni
    </p>
 
    <input type="submit" name="BtnBotao" value="Cadastrar">

</form>

</fieldset> 

</div>  
 
</body>
</html>

<?php

	if(isset($_REQUEST["BtnBotao"])) {
    
		$nome = $_REQUEST["nome"];
		
		$email = $_REQUEST["email"];
			 
		$sexo = $_REQUEST["sexo"];	
		
		$cursos = $_REQUEST["cursos"];
			
		//planos
		$plano1=(!empty($_REQUEST["plano1"])) ? $_REQUEST["plano1"]:'';
		$plano2=(!empty($_REQUEST["plano2"])) ? $_REQUEST["plano2"]:'';
		$plano3=(!empty($_REQUEST["plano3"])) ? $_REQUEST["plano3"]:'';
		
		

	//BLOCO DE CONTROLE	
		try{			
			//conexão com o BD
			require_once "conexao.php";
			
			//codigo para gravar os dados no BD ***INSERT***
			$insert = $conn->prepare("INSERT INTO cursos(idcursos, nome, email, sexo, curso, plano1, plano2, plano3)						
									VALUES(:idcursos, :nome, :email, :sexo, :curso, :plano1, :plano2, :plano3)");
			
			//valores de referencia
			
			$insert->bindValue(':idcursos', null);
			$insert->bindValue(':nome',$nome);
			$insert->bindValue(':email',$email);
			$insert->bindValue(':sexo',$sexo);
			$insert->bindValue(':curso',$cursos);
			$insert->bindValue(':plano1',$plano1);
			$insert->bindValue(':plano2',$plano2);
			$insert->bindValue(':plano3',$plano3);
			
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