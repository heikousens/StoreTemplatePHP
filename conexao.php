<?php
	$servidor = 'localhost';
	$usuario  = 'root';
	$senha 	  = '';
	$banco 	  = 'projetophp';
	$conexao  = mysqli_connect($servidor, $usuario, $senha, $banco);
?>

<!-- Essas variáveis são personalizáveis porque são criadas no php, elas não precisam ter um nome específico, já que pertencem ao banco de dados. Mysqli_connect é o comando de ligação do php com o banco de dados. Podemos usar mysqli ou mysql somente, sem o i, a depender da versão do MySQL que estivermos usando. Ele vai connectar as variáveis que estabelecermos - importante: sempre serão essas 4 variáveis para estabelecer essa conexão, e todas elas devem ser inseridas no mysqli_connect, necessariamente nessa ordem. Quando fizer a hospedagem, o servidor dará esses dados, por isso que é importante deixar esse arquivo separado, em vez de incluir em todos os outros arquivos. -->