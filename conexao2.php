<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha 	  = '';
$banco 	  = 'projetophp';
$conexao  = mysqli_connect($servidor, $usuario, $senha, $banco);
	try{
	  $conexao = new PDO('mysql:host='.$servidor.';dbname=projetophp', $usuario, $senha);  
	  
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>