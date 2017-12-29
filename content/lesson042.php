<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > AJAX Método GET</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">AJAX Método GET</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row margenesInternos">
						<div class="col-sm-8 border border-dark rounded margenesInternos">
							<form method="GET">
								<div class="form-group">
									<label class="font-weight-bold text-justify">Función Empleada Para Obtener El Valor De Un Input En Un Formulario</label>

									<div class="row">
										<div class="col-sm-4">
											<label class="custom-control custom-radio">
												<input type="radio" name="respuesta" value="text" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">text( )</span>
											</label>
										</div>

										<div class="col-sm-4">
											<label class="custom-control custom-radio">
												<input type="radio" name="respuesta" value="val" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">val( )</span>
											</label>
										</div>

										<div class="col-sm-4">
											<label class="custom-control custom-radio">
												<input type="radio" name="respuesta" value="html" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">html( )</span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<button id="btn_resp" class="btn btn-block btn-primary">Contestar</button>
										</div>
										<div class="col-sm-4"></div>
									</div>
								</div>
							</form>	
						</div>

						<div class="col-sm-4">
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


			$("#btn_resp").click(function(e) {
				var valoRespuesta = $("input[name='respuesta']:checked").val();

				$.get('../ajax/lesson042-get-datos.php',{respuesta: valoRespuesta}, function(data) {
					$("#div_respuesta").html(data);
				});

				e.preventDefault();
			});
		});
	</script>
</body>
</html>