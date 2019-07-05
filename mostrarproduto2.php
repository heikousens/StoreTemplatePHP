<?php
	include "Include/header.php";
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    
    <script>

function confirmar() {
	var x  = confirm('Deseja realmente excluir?');
	
	if(x) {
		return true;
	} else {
		return false;
	}
}	

</script>
</head>

<body>


    <?php
        include ('conexao.php');

        $codproduto = $_REQUEST['codproduto'];

        $sql = "select * from produto where codproduto=$codproduto";

        $resultado = mysqli_query($conexao, $sql);

        $dados = mysqli_fetch_array($resultado);
        ?>


        <section class="container">
            
            <div class="row">
            
            <div class="col-xs-12 col-lg-6 col-md-6">
                <img src="Imagens/<?=$dados['imagem']; ?>" alt="imagem" class="w-75 h-75" width=100%>
            </div>



            <div class="info col-xs-12 col-lg-6 col-md-6">
                <div class="titulo">
                    <h3><?= $dados['nomeproduto']; ?></h3>
					<div class="page-header" style="margin-top: 0px; border-bottom: 5px solid rgba(238,180,180, 0.5);">
                </div>
				<br/>
				<div class="preco" style="font-size: 30px;">
                    R$  <?=$dados['preco']; ?>
                </div>
				<br/>
				<div class="genero">
                    <?= $dados['descricao']; 
                    
                    
                    ?>
                </div>
				<br/>
                <div class="genero">
                    <b style="color:#EEB4B4;">Categoria:</b> <?= $dados['categoria']; 
                    
                    
                    ?>
                </div>
				<br/>
                <div class="compra">
                    <div class="botao">
                        <a class="btn btn-carrinho" href="carrinho.php?acao=add&codproduto=<?php echo $dados['codproduto']?>" style="color: #FFFFFF;">Comprar</a>
                    </div>
                </div>
            </div>
</div>
        </section>
        
        

       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include "Include/footer.php";?>
</body>

</html>
