<?php 
include('conexao.php');
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];
	
	$sql = "insert into contato values(null,'".$nome."','".$email."','".$assunto."','".$mensagem."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        alert('Mensagem registrada com sucesso!');
	        location.href='index.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Não foi possível registrar sua mensagem. Verifique novamente as informações inseridas.');
	        location.href='contato.php';
	      </script>";
	}
	mysqli_close($conexao);
?>