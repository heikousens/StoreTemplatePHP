<?php
	include "Include/header.php";
?>

<div class="row areaIcones">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="page-header" style="margin-left:20px; margin-right:20px;">
		<h2 style="font-family: Verdana; margin-left:10px; margin-right:10px; color: #EEB4B4; letter-spacing: 2px;">Identificação</h2>
	</div>
</div>
	<br/>
	<br/>
	<br/>
	<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5" style="border-right: 0.5px solid #E6E6E6;">
		<h3 style="text-align:center; font-family: Verdana; letter-spacing: 1px;">Já sou cadastrado</h3>
		<p>&nbsp;</p>
			<div class="container">
				<div class="row">
				<div class="col-xs-5">
					<form class="form-horizontal" action="fazlogin.php" method="POST">
						<div class="form-group">
							<label for="email" class="col-xs-2 control-label">Login:</label>
							<div class="col-xs-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="Insira seu E-mail"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="senha" class="col-xs-2 control-label">Senha:</label>
							<div class="col-xs-10">
								<input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua Senha"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-2">
								<button type="submit" class="btn btn-carrinho">Entrar</button>
							</div>
							<div>
								<button type="reset" class="btn btn-default">Limpar</button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
	</div>
		<br/>
		<br/>
	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
		<h3 style="text-align:center; font-family: Verdana; letter-spacing: 1px;">Criar uma nova conta</h3>
		<p>&nbsp;</p>
			<div class="container">
				<div class="row">
				<div class="col-xs-5">
					<form class="form-horizontal" action="cadastrocliente.php" method="POST">
						<div class="form-group">
							<label for="email" class="col-xs-2 control-label">E-mail:</label>
							<div class="col-xs-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="Insira seu E-mail"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-2">
								<button type="submit" class="btn btn-carrinho">Cadastrar</button>
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		<br/>
		<br/>
	</div>
</div>







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