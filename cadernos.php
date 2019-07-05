<?php
include "Include/header.php";
include('conexao.php');
$sql = "select * from produto";
$sql2 = "SELECT * FROM produto where categoria='Cadernos'"; /* o filtro aqui pode ser qualquer coisa, como preço em vez de categoria */
$resultado2 = mysqli_query($conexao,$sql2);
$resultado = mysqli_query($conexao,$sql);
?>
<div class="row areaIcones">
	<?php
		include "Include/sidebar.php";
		include "conexao2.php";
	?>
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<div class="page-header" style="margin-left:20px; margin-right:20px; margin-top: 0px; border-bottom: 5px solid rgba(238,180,180, 0.5);">
		<h3 style="font-family: Verdana; margin-left:10px; margin-right:10px; color: #888888; letter-spacing: 2px;">Cadernos</h3>
	</div>
	<br/>
	<p style="font-family: Verdana; margin-left:40px; margin-right:40px; color: #888888; letter-spacing: 2px;">Para atividades diárias ou para criações artísticas, os cadernos são companheiros inseparáveis das pessoas criativas. Em tamanhos variados, que vão do A2 ao B5, e com folhas pautadas, quadriculadas ou lisas, aqui você certamente encontrará um caderno que se encaixará em suas necessidades.</p>
	<br/>
	<div class="row">
		<!--Imagens diretas do banco-->       
        <?php
        $stmt = $conexao->prepare("SELECT * FROM produto WHERE categoria = 'Cadernos'");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
        ?>
		<?php
                $i = 1;
                do {
                    ($dados = mysqli_fetch_array($resultado2)); 

                ?>
		<div class="col-sm-4" align="center">
		<div class="hvrbox"><a href="mostrarproduto.php?codproduto=<?= $dados['codproduto']; ?>">
              <img class="img-responsive hvrbox-layer_bottom" src="Imagens/<?php echo $row['imagem'] ?>" alt="<?php echo $row['imagem'] ?>" style="height:300px;width:100%;"><div class="hover hvrbox-layer_top hvrbox-layer_slidedown"><div class="hvrbox-text"><p><h1 style="font-family: sans-serif;">[ + ]</h1></p><br/><p style="font: 1.1em Garamond;">Ver mais</p></div></div></div></a>
              <div class="caption text">
                <h4><!-- Descrição --><?php echo $row['nomeproduto'] ?></h4>
				<?php echo "R$ "; echo $row['preco']?>
               </p>
              </div>
         </div>
		<?php
                    $i++;
                        } while ($i<2); /* para que a página mostre apenas 5 produtos */
                ?>
        <?php
            }
			}
        ?>
     </div>
	 </div>
	
</div>
<br>
<br>
<br>





	<!--  JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- inserindo Java do Bootstrap -->
	<!-- Última versão Java compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	
</body>
<?php
	include "Include/footer.php";
?>
</html>