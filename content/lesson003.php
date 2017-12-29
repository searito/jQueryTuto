<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Uso De $(this)</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Uso Del Selector $(this)</h3>
			</div>

			
			<div class="card text-center espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-2">
							<button id="btn_texto" class="btn btn-dark btn-block">
								<i class="fa fa-mouse-pointer"></i> Click
							</button>
						</div>

						<div class="col-sm-10">
							<p id="texto">Este Es Un Texto De Prueba</p>
						</div>
					</div>

					<div class="row" style="margin-top: 5%;">
						<div class="col-sm-5">
							<div class="form-group">
								<label for="" class="pull-left">Selecciona Tu País</label>
								<select name="slct_opcion" id="slct_opcion" class="custom-select form-control">
									<option selected>Selecciona Una Opción</option>
									<option value="1">Guatemala</option>
									<option value="2">Belice</option>
									<option value="3">Honduras</option>
									<option value="4">El Salvador</option>
									<option value="5">Nicaragua</option>
									<option value="6">Costa Rica</option>
									<option value="7">Panamá</option>
								</select>
							</div>
						</div>

						<div class="col-sm-7" id="resultado_pais"></div>
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

			$("#btn_texto").click(function() {
				$("#texto").fadeOut(3500).fadeIn(500);
			});

			$("#slct_opcion").change(function() {
				var paisSeleccionado = $(this).find('option:selected').text();

				$("#resultado_pais").html('<h6 class="textoPrincipal margenSuperior5">El País Seleccionado Es '+ paisSeleccionado +'</h6>');
			});

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});
		});
	</script>
</body>
</html>