<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Detalhes</title>
</head>

<style>
	td {
		padding:3px;
	}
	
	table {
		border-style:double;
	}
	
</style>

<div align="center"> 

<h1> Consulta Detalhada </h1>

<?php

	//verifica se existe o idform na URL
	
	if(isset($_REQUEST['idcursos'])){
		
		$idcursos= $_REQUEST["idcursos"];
		
		
		try{
			require_once("conexao.php");
			
			$consulta = $conn->prepare ('select * from formulario where idcursos=:idcursos');
			$consulta->bindValue(":idcursos",$idcursos);
			$consulta->execute();
			$row = $consulta->fetch(PDO::FETCH_ASSOC);
					
		echo "<table border='1' cellspacing='0' cellpadding='0'>
    
				<tr>
					<td><strong>ID</strong></td>
					<td>$row[idcursos]</td>
				</tr>
				<tr>
					<td><strong>Nome</strong></td>
					<td>$row[nome]</td>
				</tr>
				<tr>
					<td><strong>Email</strong></td>
					<td>$row[email]</td>
				</tr>
				<tr>
					<td><strong>Nascimento</strong></td>
					<td>$row[nascimento]</td>
				</tr>
				<tr>
					<td><strong>Sexo</strong></td>
					<td>$row[sexo]</td>
				</tr>
				<tr>
					<td><strong>Curso</strong></td>
					<td>$row[cursos]</td>
				</tr>
				<tr>
					<td><strong>Plano 1</strong></td>
					<td>$row[plano1]</td>
				</tr>
				<tr>
					<td><strong>Plano 2</strong></td>
					<td>$row[plano2]</td>
				</tr>
				<tr>
					<td><strong>Plano 3</strong></td>
					<td>$row[plano3]</td>
				</tr>
				<tr>
					<td><strong>Plano 4</strong></td>
					<td>$row[plano4]</td>
				</tr>
			
			  </table>
				
			  ";	
			
				
		}catch (PDOException $erro){
			echo $erro->getMessage();}

	}



?>

<p><a href="formulario.php"><img src="voltar.png" height="30" width="auto"></a></p>

</div>

<body>
</body>
</html>