<?php

$servername="localhost";
$username="root";
$password="";
$dbname="phpbd";

try{

	
	$conn= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//echo "Conexao Efetuada com Sucesso ";
	
}
catch (PDOException $erro)
{
	echo "Connection failed: " . $e->getMessage();
}

?>