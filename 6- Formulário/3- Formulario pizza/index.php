<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		body {
			background-color:#FFC		
		}
	</style>
</head>

<body>
<form name="form" sethod="post" action="exibe">
	
  <h2>Formulário de Inscrição</h2>

  <h1>Dados Pessoais</h1>
  
  	<p> <strong>Nome:</strong><input type="text" name="nome"></p>
    <p> <strong>Email:</strong><input type="text" name="email"></p>
    <p> <strong>Celular:</strong><input type="text" name="celular"></p> 
    <p> <strong>CPF:</strong><input type="text" name="cpf"></p>
    <p> <strong>Data de Nascimento:</strong><input type="text" name="nascimento"></p>
    <p> <strong>CEP:</strong><input type="text" name="cep"></p>
    <p> <strong>Estado:</strong>
    	<select name="estado">
        	<option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
         </select>
            
    <p> <strong>Cidade:</strong>
    	<select name="cidade">
        	<option value="São José do Rio Pardo">São José do Rio Pardo</option>
            <option value="Caconde">Caconde</option>
            <option value="Tapiratiba">Tapiratiba</option>
            <option value="Itobi">Itobi</option>
            <option value="Casa Branca">Casa Branca</option>
            <option value="Poços de Caldas">Poços de Caldas</option>
            <option value="Guaxupé">Guaxupé</option>
            <option value="Guaranésia">Guaranésia</option>
            <option value="Vargem Grade do Sul">Vargem Grade do Sul</option>
         </select>
    	
     <hr>
     
     <h1>Dados da Pizza</h1>
     
     <p><strong> Tamanhos: </strong> <br>
     	
        <input type="radio" name="tamanho" value="5,00#Pequena R$ 5,00"> Pequena R$ 5,00 <br>
        <input type="radio" name="tamanho" value="7,00#Média R$ 7,00"> Média R$ 7,00 <br>
        <input type="radio" name="tamanho" value="10,00#Gande R$ 10,00"> Gande R$ 10,00 <br>
           
   	  </p>
      
       <h1>Sabores</h1>
     
     <p><strong>Escolha um sabor: </strong> <br>
     	
        <input type="radio" name="sabores" value="19.00#Frango R$ 19,00"> Frango R$ 19,00 <br>
        <input type="radio" name="sabores" value="21.00#Marguerita R$ 21,00"> Marguerita R$ 21,00 <br>
        <input type="radio" name="sabores" value="20.00#Calabresa R$ 20,00"> Calabresa R$ 20,00 <br>
        <input type="radio" name="sabores" value="22.00#Toscana R$ 22,00"> Toscana R$ 22,00 <br>
        <input type="radio" name="sabores" value="23.00#4 Queijos R$ 23,00"> 4 Queijos R$ 23,00 <br>
        <input type="radio" name="sabores" value="24.00#Lombinho R$24,00"> Lombinho R$24,00 <br>
        
           
   	  </p>
      
      <hr>
      
        <p> <h1>Acrescimos</h1>
      
    	<input type="checkbox" name="op1" value="5.00#Bacon R$ 5,00"> Bacon R$ 5,00<br>
        <input type="checkbox" name="op2" value="5.00#Cheddar R$ 5,00"> Cheddar R$ 5,00<br>
        <input type="checkbox" name="op3" value="4.00#Catupiry R$ 4,00"> Catupiry R$ 4,00<br>
        <input type="checkbox" name="op4" value="5.00#Tomate seco R$ 5,00"> Tomate seco R$ 5,00<br>
        <input type="checkbox" name="op5" value="3.00#Rucula R$ 3,00"> Rucula R$ 3,00<br>
        <input type="checkbox" name="op6" value="2.00#Batata palha R$ 2,00">Batata palha R$ 2,00<br>
     </p> 
     
     <hr>
     
     <p><h1>Borda recheada</h1>
      
    	<input type="checkbox" name="op7" value="3.00#Borda Recheada R$ 3,00"> Borda Recheada R$ 3,00<br>
     </p>
     
        <hr>
     
     <p><h1>Retirada ou Entrega</h1>
      
    	<input type="checkbox" name="op8" value="5.00#Entrega R$ 5,00">Entrega R$ 5,00<br>
     </p>
       
   
    
    <p> <input type="submit" name="btnRegistrar Pedido" value="Registrar Pedido"></p>
    
</form> 
</body>
</html>