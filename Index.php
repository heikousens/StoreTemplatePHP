<?php
	include "Include/header.php";
?>

<div class="row areaIcones">
	<?php
		include "Include/sidebar.php";
	?>
	<div class="divslider" style="background-color: black;">
	<div class="container-slider">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
		<div id="sliderprincipal" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" style="width:100%;">
			<ol class="carousel-indicators">
				<li class="active" data-target="#sliderprincipal" data-slide-to="0"></li>
				<li data-target="#sliderprincipal" data-slide-to="1"></li>
				<li data-target="#sliderprincipal" data-slide-to="2"></li>
				<li data-target="#sliderprincipal" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<figure class="banner-container">
						<img src="Imagens/1501694286416.jpeg" alt="" style="width:100%;"/>
					</figure>
				</div>
				<div class="item">
					<figure class="banner-container">
						<img src="Imagens/5792d928544b88034e83500a0fa53e83.jpg" alt="" style="width:100%;"/>
					</figure>
				</div>
				<div class="item">
					<figure class="banner-container">
						<img src="Imagens/muji.jpg" alt="" style="width:100%;"/>
					</figure>
				</div>
				<div class="item">
					<figure class="banner-container">
						<img src="Imagens/paintbrushes-48-1200x800.jpg" alt="" style="width:100%;"/>
					</figure>
				</div>
			</div>
		</div>
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