<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > AJAX, getJSON</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">AJAX, getJSON</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-7">
									<button id="btn_get" class="btn btn-block btn-dark">
										<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Cargar Datos
									</button>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div id="div_respuesta"></div>
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


			$("#btn_get").click(function() {
				$.getJSON('../ajax/lesson043.json', function(datos) {
						var colegio = datos.alumnos.colegio;
						var ciudad = datos.alumnos.ciudad;
						var clase1 = datos.alumnos.clase1;
						var clase2 = datos.alumnos.clase2;

						$("#div_respuesta").append('<h4 class="text-center colorPrincipal fuenteTuneada margenesInternos bg-light rounded">'+ colegio +'</h4>');
						$("#div_respuesta").append('<h4 class="text-center colorPrincipal fuenteTuneada margenesInternos bg-light rounded">'+ ciudad +'</h4>');
						$("#div_respuesta").append('<h3 class="text-center fuenteTuneada text-danger bg-light margenesInternos rounded font-weight-bold">Clase 1</h3>');

						for(x = 0; x < clase1.length; x++){
							$("#div_respuesta").append('Alumno: <b>'+ clase1[x][0] +'</b> ===> Nota: <b>'+ clase1[x][1] +'</b><br>');
						}

						$("#div_respuesta").append('<h3 class="text-center fuenteTuneada text-danger bg-light margenesInternos rounded font-weight-bold">Clase 2</h3>');

						for(x = 0; x < clase2.length; x++){
							$("#div_respuesta").append('Alumno: <b>'+ clase2[x][0] +'</b> ===> Nota: <b>'+ clase2[x][1] +'</b><br>');
						}
				});
			});
		});
	</script>
</body>
</html>