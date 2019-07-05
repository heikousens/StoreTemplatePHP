<?php  
    include('conexao.php');
	$email = $_POST["email"];
	
	$sql = "insert into emailcli values(null,'".$email."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
	        location.href='cadastrocliente2.php';
	      </script>";
	}else{
		echo "<script>
	        alert('Houve um erro ao processar seu pedido. Verifique novamente as informações inseridas.');
	        location.href='login.php';
	      </script>";
	}
	mysqli_close($conexao);
?>