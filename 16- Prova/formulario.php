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
		height:650px;
		width:300px;
		background-color:#FFC;
		border:ridge;
	}
</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<div align="center">

<fieldset>
<legend>Formulario de Inscrição</legend>
<form name="frm" method="post" action="">

	<p>Nome: <input type="text" name="nome"></p>
    
    <p>E-mail: <input type="email" name="email"></p>
    
    <p>Data de Nascimento: <input type="date" name="nascimento"></p>
    
<hr>
    
    <h2><p>Sexo:<br></h2>
    	<input type="radio" name="sexo" value="Feminino">Feminino<br>
        <input type="radio" name="sexo" value="Masculino">Masculino<br>
    </p>
    <h2><p>Cursos:<br></h2>
     	<input type="radio" name="cursos" value="Direito">Direito<br>
        <input type="radio" name="cursos" value="Análise de Sistema">Análise de Sistema<br>
        <input type="radio" name="cursos" value="Administração">Administração<br>
        <input type="radio" name="cursos" value="Sociologia">Sociologia<br>
    </p>
    <h2><p>Planos:<br></h2>
    	<input type="checkbox" name="plano1" value="Fies">Fies<br>
        <input type="checkbox" name="plano2" value="Bolsa">Bolsa<br>
        <input type="checkbox" name="plano3" value="Prouni">Prouni<br>
        <input type="checkbox" name="plano4" value="Sisu">Sisu<br>
    </p>
 
    <input type="submit" name="BtnBotao" value="Cadastrar">

</form>
</fieldset> 
</div>  

<center>

<?php

	if(isset($_REQUEST["BtnBotao"])) {
    
		$nome = $_REQUEST["nome"];
		
		$email = $_REQUEST["email"];
		
		$nascimento = $_REQUEST["nascimento"];
			 
		$sexo = $_REQUEST["sexo"];	
		
		$cursos = $_REQUEST["cursos"];
			
		//planos
		$plano1=(!empty($_REQUEST["plano1"])) ? $_REQUEST["plano1"]:'';
		$plano2=(!empty($_REQUEST["plano2"])) ? $_REQUEST["plano2"]:'';
		$plano3=(!empty($_REQUEST["plano3"])) ? $_REQUEST["plano3"]:'';
		$plano4=(!empty($_REQUEST["plano4"])) ? $_REQUEST["plano4"]:'';
		
		

	//BLOCO DE CONTROLE	
		try{			
			//conexão com o BD
			require_once "conexao.php";
			
			//codigo para gravar os dados no BD ***INSERT***
			$insert = $conn->prepare("INSERT INTO formulario(idcursos, nome, email, nascimento, sexo, cursos, plano1, plano2, plano3, plano4)						
									VALUES(:idcursos, :nome, :email, :nascimento, :sexo, :cursos, :plano1, :plano2, :plano3, :plano4)");
			
			//valores de referencia
			
			$insert->bindValue(':idcursos', null);
			$insert->bindValue(':nome',$nome);
			$insert->bindValue(':email',$email);
			$insert->bindValue(':nascimento',$nascimento);
			$insert->bindValue(':sexo',$sexo);
			$insert->bindValue(':cursos',$cursos);
			$insert->bindValue(':plano1',$plano1);
			$insert->bindValue(':plano2',$plano2);
			$insert->bindValue(':plano3',$plano3);
			$insert->bindValue(':plano4',$plano4);
			
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
<h2>Consulta</h2>
	
	<table border="1" cellspacing="0" cellpadding="0">
	
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Email</td>
			<td>Ações</td>
		</tr>
    
<?php
		try{			
		
			require_once "conexao.php";
			
			//Select para buscar as inforamações no BD
			
			$consulta = $conn -> prepare("select idcursos, nome, email from formulario");
			$consulta -> execute();
			
			while($row = $consulta -> fetch(PDO::FETCH_ASSOC)){
			
			echo 
			"<tr>
				<td>$row[idcursos]</td>
				<td>$row[nome]</td>
				<td>$row[email]</td>
				<td>
						<a href='detalhes.php?idcursos=$row[idcursos]'><img src='details.png' title='detalhes' height='25' width='auto'></a>
						<a href='alterar.php?al=$row[idcursos]'><img src='update.ico' title='alterar' height='25' width='auto'></a>
						<a href='formulario.php?ex=$row[idcursos]'><img src='delete.ico' title='excluir' height='25' width='auto'></a>
						
					</td>
				</tr>";
				}
  
    		}catch (PDOException $erro){
			echo $erro->getMessage();}
			
			
			
		//codigo PHP: excluir (ex)
			if(isset($_REQUEST["ex"])) {
				
				$idcursos = $_REQUEST["ex"];
				
				//bloco de controle
				try{
					
					require "conexao.php";
					
						//codigo excluir
						$excluir = $conn->prepare("DELETE FROM formulario where idcursos=:idcursos");
						$excluir->bindValue(':idcursos',$idcursos);
						$excluir->execute();
					
						echo "<script>
						alert('Registro Excluído com sucesso!!!');
						location.href='formulario.php';
						</script>
						";	
					
					//fecha conexao.php
					$conn = null;
					
		
  
    		}catch (PDOException $erro){
			echo $erro->getMessage();}	
			
			}
?>
</center>
</body>
</html>