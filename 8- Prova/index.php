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
  
  <hr>

  <h3>Dados Pessoais</h3>
  
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
     
     <h3>Graduação que pretende Cursar</h3>
     	 
      <input type="radio" name="curso" value="900.00#Ciência da Computação"> Ciência da Computação - Mensalidade R$ 900.00 <br>
      <input type="radio" name="curso" value="1200.00#Engenharia Civil"> Engenharia Civil - Mensalidade R$ 1200.00 <br>
      <input type="radio" name="curso" value="1300.00#Direito"> Direito - Mensalidade R$ 1300.00 <br>
      <input type="radio" name="curso" value="700.00#Administração"> Administração - Mensalidade R$ 700.00 <br> 
      
      <hr>
      
      <h3>Já possuí algum curso Superior?</h3>  	
      <input type="radio" name="sn" value="Sim"> Sim <br>
      <input type="radio" name="sn" value="Não"> Não <br> 
      
      <hr>
      
      <h3>Mini Cursos que pretende cursar?</h3>
      	<input type="checkbox" name="op1" value="300.00#Java com Oracle"> Java com Oracle - Valor R$300.00<br>
      	<input type="checkbox" name="op2" value="400.00#Desenho Industrial"> Desenho Industrial - Valor R$400.00<br>
        <input type="checkbox" name="op3" value="250.00#Direito Administrativo"> Direito Administrativo - Valor R$250.00<br>
        <input type="checkbox" name="op3" value="250.00#Direito Administrativo"> Direito Administrativo - Valor R$250.00<br>
        <input type="checkbox" name="op4" value="300.00#Estatística"> Estatística - Valor R$300.00<br>
     
     <hr>
      
      <h3>Disciplinas Opicionais?</h3>
      	<input type="checkbox" name="op5" value="Estrutura de Dados"> Estrutura de Dados<br>
      	<input type="checkbox" name="op6" value="Calculo 3"> Calculo 3<br>
        <input type="checkbox" name="op7" value="Direito Tributário"> Direito Tributário<br>
        <input type="checkbox" name="op8" value="Comércio Exterior"> Comércio Exterior<br> 
     
     <hr>
     
     <h3>Horário</h3>  	
      <input type="radio" name="horario" value="Diurno"> Diurno <br>
      <input type="radio" name="horario" value="Noturno"> Noturno <br> 
     
     <hr>
      
      <h3>Termos</h3>
      <input type="checkbox" name="op9" value="Concordo com os termos da Instituição"> Concordo com os termos da Instituição<br> 
     
    
     <p> <input type="submit" name="btnRealizar Inscrição" value="Registrar Inscrição"></p>
    
</form> 
</body>
</html>