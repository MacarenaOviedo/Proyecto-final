<html lang="es">
<head>
<title>Macarena Oviedo</title>
<meta charset="UTF8">
<meta name="description" content="Macarena Oviedo Portafolio">
<script src="assets/js/SmoothScroll.min.js"></script>
<script src="assets/js/jquery-1.12.0.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>



		<footer>
			<div class="footer1" id="contacto">
				<div class="container cont-flex">
					<article class=" col-2 form-contact">
						<h2>Contacto</h2>
<form action="enviar.php" method="post">
  Nombre:
  <input type="text" name="nombre" value="" />
  Email:
  <input type="text" name="email" value="" />
  Teléfono:
  <input type="text" name="telefono" value="" />
  Mensaje:
  <input type="text" name="mensaje" value="" />
  <input type="submit" value="Enviar" />
</form>
<!-- Notificación al usuario (El div se encuentra oculto hasta recibir la variable envio con valor ok) -->
<?php if($_GET[‘envio’] == ’ok’){ ?>
<div id="mensaje_para_usuario">El mensaje ha sido enviado correctamente. </div>
<?php } ?>

						<!--<form action="enviar.php" method="post">
							<div class="form-group">
							<label>Nombre</label>
							<input name="nombre" type="text" value="">
							</div>
							<div class="form-group">
							<label>E-mail</label>
							<input name="email" type="text" value="">
							</div>
							<div class="form-group">
							<label>Comentario</label>
							<input type="text" name="mensaje" value="" />
							</div>

							<input name="" type="submit" value="Enviar">

						</form>-->

					</article>
					<article class="col-2">
						<p>Macarena Oviedo <br>Diseño gráfico - Producción web.</p>
						<ul class="redes">
							<li><a href="https://www.linkedin.com/in/macarena-oviedo-595b0494?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a></li>
							<!--<li><a href=""><i class="fa fa-github"></i></a></li>-->
						</ul>


					</article>
				</div>
			</div>
			<div class="footer2">
				<div class="container">
					<p class="copyright">Macarena Oviedo. Copyright 2016.</p>

				</div>

			</div>
		</footer>



	</div>

</body>