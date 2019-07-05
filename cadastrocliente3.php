<?php 
include('conexao.php');
	$nome = $_POST["nome"];
	$sexo = $_POST["sexo"];
	$cpf = $_POST["cpf"];
	$idade = $_POST["idade"];
	$endereco = $_POST["endereco"];
	$cep = $_POST["cep"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$res = $_POST["res"];
	$cel = $_POST["cel"];
	$senha = $_POST["senha"];
	
	$sql = "insert into cliente values(null,'".$nome."','".$sexo."','".$cpf."','".$idade."','".$endereco."','".$cep."','".$cidade."','".$estado."','".$res."','".$cel."','".$senha."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        alert('Cadastro efetuado com sucesso!');
	        location.href='index.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível efetuar seu cadastro. Verifique novamente as informações inseridas.');
	        location.href='cadastrocliente.php';
	      </script>";
	}
	mysqli_close($conexao);
?>