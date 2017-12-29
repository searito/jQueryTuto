<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Efectos y Animaciones Con Animate</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
		  integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="shortcut icon" href="http://ejemplocodigo.com/wp-content/uploads/2014/09/jquery-e1417606719180-150x150.png">
  	<link rel="stylesheet" href="../css/formato.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
</head>

<style>
	#contenedor{ 
		position: relative; 
		width: 250px; 
		height: 250px; 
		border-radius: 50%; 
		background-color: #303F9F; 
	}
</style>

<body>
	<div class="container-fluid colorAcentuado" id="fondoPag">
		<div class="container bg-white">
			<div class="jumbotron bg-transparent">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Efectos y Animaciones Con Animate</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="row espacioBajo">
								<div class="col-sm-2">
									<button id="btn_animate" class="btn btn-dark btn-block" title="Activar Animación" value="Horizontal">
										<i class="fa fa-chevron-right"></i>
									</button>
								</div>

								<div class="col-sm-2">
									<button id="btn_animate2" class="btn btn-primary btn-block" title="Activar Animación" value="Vertical">
										<i class="fa fa-chevron-up"></i>
									</button>
								</div>

								<div class="col-sm-2">
									<button id="btn_animate3" class="btn btn-light btn-block" title="Activar Animación" value="Dimension">
										<i class="fa fa-arrows-alt"></i>
									</button>
								</div>
							</div>
							<div id="contenedor">
								
							</div>
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


			$("#btn_animate").click(function() {
				if ($(this).val() == "Horizontal") {
					$(this).val("Animacion En Progreso");
					$("#contenedor").animate({left: "+=400"}, 3500).animate({left: "-=400"}, 2000, function () {
						 $("#btn_animate").val("Horizontal");
					});
				}
			});


			$("#btn_animate2").click(function() {
				if ($(this).val('Vertical')) {
					$(this).val('Animacion En Progreso');
					$("#contenedor").animate({top: '+=300'}, 3500).animate({top: '-=300'}, 2000, function () {
						$("#btn_animate2").val("Vertical");
					});
				}
			});


			$("#btn_animate3").click(function() {
				if ($(this).val() === 'Dimension') {
					$(this).val('Animacion En Progreso');

					$("#contenedor").animate({width: '+=400', height: '+=400'}, 3500).animate({width: '-=400', height: '-=400'}, 2000, function () {
						$("#btn_animate3").val("Dimension");
					});
				}
			});
		});
	</script>
</body>
</html>