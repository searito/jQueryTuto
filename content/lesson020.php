<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Métodos append y prepend</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
		  integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="shortcut icon" href="http://ejemplocodigo.com/wp-content/uploads/2014/09/jquery-e1417606719180-150x150.png">
  	<link rel="stylesheet" href="../css/formato.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
</head>
<body>
	<div class="container-fluid colorAcentuado" id="fondoPag">
		<div class="container bg-white">
			<div class="jumbotron bg-transparent">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Métodos Append y Prepend</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-4">
							<p id="parrafo2">
								Texto Base
							</p>
						</div>

						<div class="col-sm-4">
							<p id="parrafo1">
								Texto Base
							</p>
						</div>

						<div class="col-sm-4">
							<div id="parrafo4" class="text-center">
								<ol>
									<li>Elemento A</li>
									<li>Elemento B</li>
									<li>Elemento C</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<button id="btn_add" class="btn btn-primary btn-block">
								<i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Texto
							</button>
						</div>

						<div class="col-sm-4">
							<button id="btn_pre" class="btn btn-info btn-block">
								<i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Texto
							</button>
						</div>

						<div class="col-sm-2">
							<button id="btn_asc" class="btn btn-secondary btn-block">
								<i class="fa fa-arrow-up" aria-hidden="true"></i>
							</button>
						</div>

						<div class="col-sm-2">
							<button id="btn_desc" class="btn btn-secondary btn-block">
								<i class="fa fa-arrow-down" aria-hidden="true"></i>	
							</button>
						</div>
					</div>
				</div>
			</div>


			<div class="fuenteTuneada text-right colorPrincipal">
				<i class="fa fa-usb" aria-hidden="true"></i> Searito Aprende
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" 
	integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" 
	integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<script src="../js/estilos.js"></script>

	<script>
		$(document).ready(function() {
			$("#titulo_rebote").addClass('animated bounceInDown');

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});


			$("#btn_add").click(function() {
				$("#parrafo2").append('<br>Contenido Después Del Texto Base');
			});


			$("#btn_pre").click(function() {
				$("#parrafo1").prepend('Contenido Antes Del Texto Base<br>');
			});


			$("#btn_asc").click(function() {
				$("ol").prepend('<li>Elemento Nuevo</li>');
			});

			$("#btn_desc").click(function() {
				$("ol").append('<li>Elemento Nuevo</li>');
			});
		});
	</script>
</body>
</html>