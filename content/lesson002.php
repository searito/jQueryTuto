<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Selector ID</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Seleccionar Vía ID</h3>
			</div>
		
			
			<div class="card text-center espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<button class="btn btn-dark fuenteTuneada" id="btn_procesar">
								<i class="fa fa-hand-peace-o" aria-hidden="true"></i> Click
							</button>
						</div>

						<div class="col-md-9">
							<div id="texto1">Texto 1</div>
							<div id="texto2">Texto 2</div>
							<div id="texto3">Texto 3</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-7">
							<div class="form-group">
								<input type="text" name="txt_contenido" id="txt_contenido" class="form-control">
							</div>
							<div class="form-group">
								<button id="btn_send" class="btn btn-primary fuenteTuneada">
									<i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar
								</button>
							</div>
						</div>
						<div class="col-sm-5"></div>
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

			$("#btn_procesar").click(function() {
				//$("*").hide(); //DESAPARECE TODOS LOS ELEMENTOS DE LA PAGINA
				$("#texto2").hide();
			});

			$("#btn_send").click(function() {
				var contenido = $("#txt_contenido").val();
				alert('Has Escrito: ' + contenido);
			});

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});
		});
	</script>
</body>
</html>