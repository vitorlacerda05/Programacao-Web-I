<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>isset</title>
<style>

fieldset{
	height:950px;
	width:300px;
	background-color:#FF9;
	text-align:left;
}
</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<div align="center">

<fieldset>
	<legend>Formulário de Inscrissão</legend>

	<form name="form">	

	<h1>Dados Pessoais</h1>
  
  	<p> <strong>Nome:</strong><input type="text" name="nome"></p>
    <p> <strong>Email:</strong><input type="email" name="email"></p>
    <p> <strong>CPF:</strong><input type="text" name="cpf"></p>
    <p> <strong>Endereço:</strong><input type="text" name="endereco"></p>
    <p> <strong>Numero da casa:</strong><input type="text" name="numero"></p>
    <p> <strong>CEP:</strong><input type="text" name="cep"></p>
    <p> <strong>Estado:</strong>
    	<select name="estado">
        	<option value="SP">SP</option>
            <option value="MG">MG</option>
         </select>
    </p>
            
    <p> <strong>Cidade:</strong>
    	<select name="cidade">
        	<option value="Caconde">Caconde</option>
            <option value="Guaxupé">Guaxupé</option>
            <option value="Itobi">Itobi</option>
            <option value="Mococa">Mococa</option>
        	<option value="São José do Rio Pardo">São José do Rio Pardo</option>
            <option value="Tapiratiba">Tapiratiba</option>  
         </select>
    </p>
      
     
     <p><h1><strong>Sexo: </strong></h1> <br>
     	
        <input type="radio" name="sexo" value="Masculino"> Masculino <br>
        <input type="radio" name="sexo" value="Feminino"> Feminino <br>
               
   	  </p>
      
      <p><h1><strong>Formação: </strong></h1> <br>
     	
        <input type="radio" name="formacao" value="Ensino Médio"> Ensino Médio <br>
        <input type="radio" name="formacao" value="Graduação"> Graduação <br>
        <input type="radio" name="formacao" value="Pós Graduação"> Pós Graduação <br>
        <input type="radio" name="formacao" value="Doutorado"> Doutorado <br>
               
   	  </p>
      
        <p> <h1>Cursos de Interesse</h1>
      
    	<input type="checkbox" name="op1" value="PHP">PHP<br>
        <input type="checkbox" name="op2" value="Java">Java<br>
        <input type="checkbox" name="op3" value="C#">C#<br>
        <input type="checkbox" name="op4" value="Android">Android<br>
        <input type="checkbox" name="op5" value="Orientação Objeto">Orientação Objeto<br>
      
    	<p> <input type="checkbox" name="op6" value="Concordo com os termos da Instituição">Concordo com os termos da Instituição<br>
        </p>
   
    
   	    <p> <input type="submit" name="BtnBotao" value="Realizar Incrição"></p>
    
</form> 

</fieldset> 
</div>  
 
</body>
</html>

<?php

	if(isset($_REQUEST["BtnBotao"])) {
    
		$nome = $_REQUEST["nome"];
		$email = $_REQUEST["email"]; 
		$cpf = $_REQUEST["cpf"];	
		$endereco = $_REQUEST["endereco"];
		$numero = $_REQUEST["numero"];
		$cep = $_REQUEST["cep"];
		$estado = $_REQUEST["estado"];
		$cidade = $_REQUEST["cidade"];
			
		$sexo = $_REQUEST["sexo"];
		
		$formacao = $_REQUEST["formacao"];
		
		$op1 =(!empty($_REQUEST["op1"])) ? $_REQUEST["op1"]:'';
		$op2 =(!empty($_REQUEST["op2"])) ? $_REQUEST["op2"]:'';
		$op3 =(!empty($_REQUEST["op3"])) ? $_REQUEST["op3"]:'';
		$op4 =(!empty($_REQUEST["op4"])) ? $_REQUEST["op4"]:'';
		$op5 =(!empty($_REQUEST["op5"])) ? $_REQUEST["op5"]:'';
		$op6 =(!empty($_REQUEST["op6"])) ? $_REQUEST["op6"]:'';
		
		
		

	//BLOCO DE CONTROLE	
		try{			
			//conexão com o BD
			require_once "conexao.php";
			
			//codigo para gravar os dados no BD ***INSERT***
			$insert = $conn->prepare("INSERT INTO formulario(idformulario, nome, email, cpf, endereco, numero, cep, estado, cidade, sexo, formacao, op1, op2, op3, op4, op5, op6)						
									VALUES(:idformulario, :nome, :email, :cpf, :endereco, :numero, :cep, :estado, :cidade, :sexo, :formacao, :op1, :op2, :op3, :op4, :op5, :op6) ");
			
			//valores de referencia
			
			$insert->bindValue(':idformulario', null);
			$insert->bindValue(':nome',$nome);
			$insert->bindValue(':email',$email);
			$insert->bindValue(':cpf',$cpf);
			$insert->bindValue(':endereco',$endereco);
			$insert->bindValue(':numero',$numero);
			$insert->bindValue(':cep',$cep);
			$insert->bindValue(':estado',$estado);
			$insert->bindValue(':cidade',$cidade);
			$insert->bindValue(':sexo',$sexo);
			$insert->bindValue(':formacao',$formacao);
			$insert->bindValue(':op1',$op1);
			$insert->bindValue(':op2',$op2);
			$insert->bindValue(':op3',$op3);
			$insert->bindValue(':op4',$op4);
			$insert->bindValue(':op5',$op5);
			$insert->bindValue(':op6',$op6);
			
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