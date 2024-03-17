<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário Graduação</title>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
	fieldset { width: 500px; }
	p {text-align: left;}
</style>

</head>

<body>
<div align="center">
<fieldset>

	<legend>Formulário de Inscrissão</legend>

<form name="frm" method="post" action="">

 <p>Nome: <input type="text" name="nome"></p>
 
 <p>Email: <input type="email" name="email"></p>
 
 <p>CPF: <input type="text" name="cpf"></p>
 
 <p>Data de Nascimento: <input type="date" name="nascimento"></p>
 
 <p>Endereço: <input type="text" name="endereco"> Número: <input type="text" name="numero" size="5"></p>
 
 <p>CEP: <input type="text" name="cep"></p>
 
 <p>Estado: 
 <select name="estado">
     <option value="MG">MG</option>
     <option value="SP">SP</option>
     <option value="RJ">RJ</option>
     <option value="GO">GO</option>
 </select></p>
 
 <p>Cidade: 
 <select name="cidade">
      <option value="Poços de Caudas">Poços de Caudas</option>
      <option value="Belo Horizonte">Belo Horizonte</option>
      <option value="São Paulo">São Paulo</option>
      <option value="São José do Rio Pardo">São José do Rio Pardo</option>
      <option value="Campinas">Campinas</option>
      <option value="Santo André">Santo André</option>
      <option value="Rio de Janeiro">Rio de Janeiro</option>
      <option value="Goiás">Goiás</option>
      <option value="Brasília">Brasília</option>
 </select></p>
 
 <h2>Sexo </h2>
 
  <p><input type="radio" name="sexo" value="masculino">Masculino <input type="radio" name="sexo" value="femino">Feminino</p>
  
 <h2>Formação: </h2>
 <p><input type="radio" name="formacao" value="ensino medio">Ensino Médio<br> 
   <input type="radio" name="formacao" value="Graduação">Graduação<br>
   <input type="radio" name="formacao" value="Pós Graduação">Pós Graduação</p>
   
 <h2>Cursos de interesse</h2>
  
 <p> <input type="checkbox" name="curso1" value="Java">Java <br>
    <input type="checkbox" name="curso2" value="PHP">PHP<br>
    <input type="checkbox" name="curso3" value="Cc">C#<br>
    <input type="checkbox" name="curso4" value="Android">Android<br>
    <input type="checkbox" name="curso5" value="Orientação Objeto">Orientação Objeto</p>
       
    
  <h2> Termos </h2>
  
   <p><input type="checkbox" name="termos" value="Concordo com os Termos">Concordo com os termos da instituição</p>
  
  
  <input type="submit" name="BtnCadastrar" value="Realizar Inscrição">
   
  </form>
  
  </fieldset>
  

<?php

	if(isset($_REQUEST["BtnCadastrar"])) {
    
		$nome = $_REQUEST["nome"];
		$email = $_REQUEST["email"];
		$cpf = $_REQUEST["cpf"];
		$nascimento = $_REQUEST["nascimento"];		
		$endereco = $_REQUEST["endereco"];
		$numero = $_REQUEST["numero"];
		$cep = $_REQUEST["cep"];
		$estado = $_REQUEST["estado"];
		$cidade = $_REQUEST["cidade"];
		$sexo = $_REQUEST["sexo"];
		$formacao = $_REQUEST["formacao"];
		
		
		$curso1 = (!empty($_REQUEST["curso1"])) ? $_REQUEST["curso1"] : 0 ;
		$curso2 = (!empty($_REQUEST["curso2"])) ? $_REQUEST["curso2"] : 0 ;
		$curso3 = (!empty($_REQUEST["curso3"])) ? $_REQUEST["curso3"] : 0 ;
		$curso4 = (!empty($_REQUEST["curso4"])) ? $_REQUEST["curso4"] : 0 ;
		$curso5 = (!empty($_REQUEST["curso5"])) ? $_REQUEST["curso5"] : 0 ;
		
		$termos = (!empty($_REQUEST["termos"])) ? $_REQUEST["termos"] : "Não Concordo" ;
		
	try{			
		
			require_once "conexao.php";
			
			$insert = $conn->prepare("INSERT INTO graduacao(idform,nome,email,cpf,nascimento,endereco,numero,cep,estado,cidade,sexo,formacao,curso1,curso2,curso3,curso4,curso5,termos)
									  VALUES(:idform,:nome,:email,:cpf,:nascimento,:endereco,:numero,:cep,:estado,:cidade,:sexo,:formacao,:curso1,:curso2,:curso3,:curso4,:curso5,:termos)");
									  
			$insert->bindValue(':idform',null);
			$insert->bindValue(':nome',$nome);
			$insert->bindValue(':email',$email);
			$insert->bindValue(':cpf',$cpf);
			$insert->bindValue(':nascimento',$nascimento);
			$insert->bindValue(':endereco',$endereco);
			$insert->bindValue(':numero',$numero);
			$insert->bindValue(':cep',$cep);
			$insert->bindValue(':estado',$estado); 
			$insert->bindValue(':cidade',$cidade);
			$insert->bindValue(':sexo',$sexo);
			$insert->bindValue(':formacao',$formacao);
			$insert->bindValue(':curso1',$curso1);
			$insert->bindValue(':curso2',$curso2);
			$insert->bindValue(':curso3',$curso3);
			$insert->bindValue(':curso4',$curso4);
			$insert->bindValue(':curso5',$curso5);
			$insert->bindValue(':termos',$termos);
			$insert->execute();
			
			if($insert){
				
				echo "<script> 
					swal({
				
						title: 'Dados Gravados com Sucesso!',
						text: '',
						icon: 'success',
						button: 'OK',
						}).then(function() {
						window.location = 'graduacao.php';
					});
				
					</script>";
			}
	}catch (PDOException $erro){
			
		echo "<script> 
							swal({
								
							title: 'Erro ao Gravar os Dados!',
							text: '',
							icon: 'error',
							button: 'OK',
							}).then(function() {
							window.location = 'graduacao.php';
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
			
			$consulta = $conn -> prepare("select idform, nome, email from graduacao");
			$consulta -> execute();
			
			while($row = $consulta -> fetch(PDO::FETCH_ASSOC)){
			
			echo 
			"<tr>
				<td>$row[idform]</td>
				<td>$row[nome]</td>
				<td>$row[email]</td>
				<td>
						<a href='detalhes.php?idform=$row[idform]'><img src='details.png' title='detalhes' height='25' width='auto'></a>
						<a href='alterar.php?al=$row[idform]'><img src='update.ico' title='alterar' height='25' width='auto'></a>
						<a href='graduacao.php?ex=$row[idform]'><img src='delete.ico' title='excluir' height='25' width='auto'></a>
						
					</td>
				</tr>";
				}
  
    		}catch (PDOException $erro){
			echo $erro->getMessage();}
			
			
			
		//codigo PHP: excluir (ex)
			if(isset($_REQUEST["ex"])) {
				
				$idform = $_REQUEST["ex"];
				
				//bloco de controle
				try{
					
					require "conexao.php";
					
						//codigo excluir
						$excluir = $conn->prepare("DELETE FROM graduacao where idform=:idform");
						$excluir->bindValue(':idform',$idform);
						$excluir->execute();
					
						echo "<script>
						alert('Registro Excluído com sucesso!!!');
						location.href='graduacao.php';
						</script>
						";	
					
					//fecha conexao.php
					$conn = null;
					
		
  
    		}catch (PDOException $erro){
			echo $erro->getMessage();}	
			
			}
?>
</body>
</html>
			
									  