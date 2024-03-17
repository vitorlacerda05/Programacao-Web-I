<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<style>
		body {
			background-color:#0FF
		}
	</style>
    
<body>

<div align="left">

	<h1>Cadastro de veículos / Motorista</h1>
    
	<form name="form" method="post" action="exibe.php">
    
       	<p><strong>Placa:</strong> <input type="text" name="placa"></p>
        <p><strong>Modelo:</strong> <select name="modelo">
            			<option value="HB 20">HB 20</option>
                		<option value="Fusca">Fusca</option>
                		<option value="Ferrari">Ferrari</option>
                		<option value="UNO">UNO</option>
           			</select></p>
        <p><strong>Ano:</strong> <input type="text" name="ano"></p>
        <p><strong>Valor:</strong> <input type="text" name="valor"></p>
        <p><strong>Motorista:</strong> <input type="text" name="motorista"></p>
        <p><strong>Email:</strong> <input type="text" name="email"></p>
  
<p><strong>Motor:</strong><br>
    
    <input type="radio" name="motor" value="1.0 Turbo"> 1.0 Turbo<br>
    <input type="radio" name="motor" value="1.6 Automático"> 1.6 Automático<br>
    <input type="radio" name="motor" value="2.0 Turbo"> 2.0 Turbo<br></p>

<p><strong>Combustível:</strong><br>
    
    <input type="radio" name="combustivel" value="Etanol"> Etanol<br>
    <input type="radio" name="combustivel" value="Gasolina"> Gasolina<br>
    <input type="radio" name="combustivel" value="Flex"> Flex<br>
    <input type="radio" name="combustivel" value="Diesel"> Diesel<br></p>
	
<p><strong>Opcionais:</strong><br>

	<input type="checkbox" name="op1" value="Rodas Liga Leve"> Rodas Liga Leve<br>
	<input type="checkbox" name="op2" value="Ar Condicionado"> Ar Condicionado<br>
	<input type="checkbox" name="op3" value="Retrovisor Automático"> Retrovisor Automático<br>
	<input type="checkbox" name="op4" value="Tapetes"> Tapetes<br>
	<input type="checkbox" name="op5" value="Air Bags"> Air Bags<br> </p>
	
<p> <input type="submit" name="btnExibir" value="Cadastrar"></p>
 
</form>
</div>
     
</body>
</html>