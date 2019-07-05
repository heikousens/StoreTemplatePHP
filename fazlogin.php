<?php
session_start();
include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM emailcli INNER JOIN cliente ON codemail = codcliente WHERE email='$email' and senha='$senha'";

$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	$_SESSION['cliente']       = $dados['codcliente'];
	$_SESSION['clientenome']  = $dados['nome'];
	$_SESSION['clientesenha'] = $dados['senha'];
	echo "<script>
	        location.href='index.php';
	      </script>";
} else {
	echo "well fuck";
}

?>




