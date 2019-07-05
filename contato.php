<?php
	include "Include/header.php";
?>

<div class="row areaIcones">
	<?php
		include "Include/sidebar.php";
		include "conexao2.php";
	?>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<div class="page-header" style="margin-left:20px; margin-right:20px; margin-top: 0px; border-bottom: 5px solid rgba(238,180,180, 0.5);">
		<h3 style="font-family: Verdana; margin-left:10px; margin-right:10px; color: #888888; letter-spacing: 2px;">Contato</h3>
	</div>
	<br/>
	<p style="font-family: Verdana; margin-left:40px; margin-right:40px; color: #888888; letter-spacing: 2px;">Elogios, dúvidas, sugestões? A tarsila. tem o maior prazer em ouvir a sua opinião! Por favor, preencha o formulário abaixo com a sua mensagem.</p>
	<br/>
	<div class="row">
		<div class="col-xs-12">
					<form class="form-horizontal" action="contato2.php" method="post">
						<div class="form-group">
							<label for="nome" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Nome Completo:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="nome" name="nome"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="email" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Email:</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" id="email" name="email"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="assunto" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Assunto:</label>
							<div class="col-xs-8">
								<select class="form-control" id="assunto" name="assunto">
									<option></option>
									<option style="font: 1.2em Garamond;" value="elogio">Elogio</option>
									<option style="font: 1.2em Garamond;" value="reclamacao">Reclamação</option>
									<option style="font: 1.2em Garamond;" value="duvida">Dúvida</option>
									<option style="font: 1.2em Garamond;" value="sugestao">Sugestão</option>
									<option style="font: 1.2em Garamond;" value="depoimento">Depoimento</option>
								</select>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="mensagem" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Mensagem:</label>
							<div class="col-xs-8">
								<textarea class="form-control" name="mensagem" rows="8" style="resize:none;"></textarea><br>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-2">
								<button type="submit" class="btn btn-carrinho" style="color: #FFFFFF;">Enviar Mensagem</button>
							</div>
							<div class="col-xs-2">
								<button type="reset" class="btn btn-default">Limpar</button>
							</div>
						</div>
					</form>
				</div>
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