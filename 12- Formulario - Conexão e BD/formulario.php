<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<div align="center">
	<form name="frm" method="post" action"">
    		<p>Nome: <input type="text" name="nome"></p>
            <p>Email: <input type="text" name="email"></p>
            <p>Data de nascimento: <input type="text" name="nascimento"></p>
    
    <p> <input type="submit" name="btncadastrar" value="Cadastrar"></p>
    
    </form>
            
</body>
</html>
</div>
<?php

if (isset($_REQUEST["btncadastrar"])) {
	
	$nome = $_REQUEST["nome"];
	$email = $_REQUEST ["email"];
	$nascimento = $_REQUEST ["nascimento"];
	
			//BLOCO DE CONTROLE	
		try{			
			//conexão com o BD
			require_once "conexao.php";
			
			//codigo para gravar os dados no BD ***INSERT***
			$insert = $conn->prepare("INSERT INTO cursos(idpessoas, nome, email, nascimento)						
									VALUES(:idpessoas, :nome, :email, :nascimento)");
			
			//valores de referencia
			
			$insert->bindValue(':idpessoas', null);
			$insert->bindValue(':nome',$nome);
			$insert->bindValue(':email',$email);
			$insert->bindValue(':nascimento',$nascimento);
			
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
