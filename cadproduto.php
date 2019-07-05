<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Produto</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
		</script>
 </head> 
  <?php
// Conexão com o banco de dados
	include "conexao.php";
	if (isset($_POST['cadastrar'])) {
		// Recupera os dados dos campos
		$nomeproduto = $_POST["nomeproduto"];
		$descricao = $_POST["descricao"];
		$categoria = $_POST["categoria"];
		$preco = $_POST["preco"];	
		$imagem = $_FILES["imagem"];
		// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {
		// Largura máxima em pixels
		$largura = 95000;
		// Altura máxima em pixels
		$altura = 980000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem válida.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagem["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "Imagens/" . $nome_imagem;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			$sql = "insert into produto values(null,'".$nomeproduto."','".$descricao."','".$categoria."','".$preco."','".$nome_imagem."')";
			$consulta = mysqli_query($conexao, $sql);
			// Se os dados forem inseridos com sucesso
			if ($sql){
				echo "Produto cadastrado com sucesso.";
			}
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
		}
	}
?>
<body>
<div class="container">
<div class="col-md-10">
	<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
		  	<div class="panel-heading">
				<div class="panel-title">
				<h1>Cadastro Produto</h1>
				</div>
			</div>
		<div class="panel-body">
	<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" name="cadastro" >
	<div class="form-group">
		<label class="col-sm-2">Nome do Produto:</label>
		<input class="form-control" type="text" name="nomeproduto" class="col-sm-5" id="nomeproduto">
		</div>
		<div class="form-group">
		<label class="col-sm-2">Descrição:</label>
		<textarea class="form-control" type="text" name="descricao" class="col-sm-5" id="descricao" rows="8" style="resize:none;"></textarea>
		</div>
		<div class="form-group">
		<label class="col-sm-2">Categoria:</label>
		<input class="form-control" type="text" name="categoria" class="col-sm-5" id="categoria">
		</div>
		<div class="form-group">
		<label class="col-sm-2"> Preço:</label>
		<input  class="form-control" type="text" name="preco" class="col-sm-5" id="preco">
		</div>
			<div class="form-group">
		<label class="col-sm-2">Imagem:</label>
		<input class="form-control" type="file" name="imagem" class="btn btn-primary" id="imagem">
		</div><br><br>
		<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="cadastrar" class="btn btn-primary"value="Cadastrar"/>
		</div>
	</form>
	</div>
	</div>		  		
	</div> 	
	</div>
	</div>
</div>  
</body>
</html>