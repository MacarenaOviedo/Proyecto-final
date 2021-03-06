<!DOCTYPE html>

<html lang="es">
	<head>
	<title>Studio Rocket Tienda</title>
	<meta charset="UTF8">
	<meta name="description" content="Studio Rocket Merchandising">
	<script src="assets/js/jquery-1.12.0.min.js"></script>
	<script src="assets/js/SmoothScroll.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.utilcarousel.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
	
	
	<link rel="stylesheet" type="text/css" href="assets/css/util.carousel.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.carousel.skins.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>
	<body>
		<header class="header-interiores">
			
			<div class="container">

				<div class="cont-nav">
					<nav class="navbar navbar-inverse"> 
						<div class="container-fluid">  
							<div class="navbar-header"> 
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> 
									<span class="sr-only">Toggle navigation</span> 
									<span class="icon-bar"></span> <span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
								</button>  
							</div>  
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9"> 
								<ul class="nav navbar-nav"> 
									<li><a href="index.html#productos">Poleras Rocket</a></li>
									<li><a href="index.html#eventos">Eventos</a></li>
									<li><a href="index.html#otros-productos">Otros productos</a></li>
									<li><a href="contacto.php" class="scroll">Contacto</a></li>
									<li><a title="Participa por premios Rocket!" href="#" class="btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-gift"></i> Participa por premios Rocket!</a></li>
								</ul> 
							</div> 
						</div> 
					</nav>
				</div>
				<div class="cont-info logo">
					<a href="index.html"><img alt="Studio Rocket Logo" src="assets/img/rocket-logo.png"></a>
					<h1 class="titulo">Contacto</h1>
					
				</div>
				
			</div>

		</header>
		<div class="wrap">
			
			<section>
				<div class="container">
					<article class="col-md-6">
						<div class="cont-interior">
							<h3 class="titulo">Ingresa tus datos en el formulario.</h3>
							<form action="enviar.php" method="post">
								Nombre:
								<input type="text" name="nombre" value="" />
								Email:
								<input type="text" name="email" value="" />
  								Teléfono:
  								<input type="text" name="telefono" value="" />
  								Mensaje:
  								<textarea> </textarea>
  								<input type="submit" class="btn btn-primary btn-enviar" value="Enviar" />
  							</form>
  
<!-- Notificación al usuario (El div se encuentra oculto hasta recibir la variable envio con valor ok) -->
<?php if($_GET[‘envio’] == ’ok’){ ?>
<div id="mensaje_para_usuario">El mensaje ha sido enviado correctamente. </div>
<?php } ?>

							
						</div>
					</article>

				</div>
			</section>

		</div>

		<footer>
			<!--<div class="footer1" id="contacto">
				<div class="container">
					<article class="col-md-6 form-contact">
						<p>Inscríbete a nuestro newsletter y gana premios.</p>
						<form action="enviar.php" method="post" class="form-inline">
							<div class="form-group">
							
							<input name="email" type="text" value="" placeholder="E-mail">
							
							</div>
							<button type="submit">Enviar</button>

						</form>
					</article>
					
				</div>
			</div>-->
			<div class="footer2">
				<div class="container">
					<p class="copyright">© Studio Rocket 2016 / Todos los derechos reservados /</p>

				</div>

			</div>
		</footer>



	</div>

		<script>
			//Funcion scroll
			jQuery(document).ready(function($) {
    			$(".scroll").click(function(event){     
        		event.preventDefault();
        		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
    			});
			});

			//Util Carrusel

			$(function() {
				$('#fullwidth').utilCarousel({
					breakPoints : [[600, 1], [900, 2], [1200, 3], [1500, 4], [1800, 5]],
					mouseWheel : false,
					rewind : false,
					autoPlay : true
				});
			});
			
		</script>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">Inscríbete a nuestro newsletter.</h4>
      				</div>
      				<div class="modal-body">
        				<form action="enviar.php" method="post" class="form-inline">
							<input name="email" type="text" value="" placeholder="E-mail">
						</form>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        				<button type="button" class="btn btn-primary btn-enviar">Enviar</button>
      				</div>
    			</div>
  			</div>
		</div>
	</body>
</html>