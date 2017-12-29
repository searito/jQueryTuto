<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Crear Funciones</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
		  integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="shortcut icon" href="http://ejemplocodigo.com/wp-content/uploads/2014/09/jquery-e1417606719180-150x150.png">
  	<link rel="stylesheet" href="../css/formato.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
</head>

<style>
	#div_animado{
		width: 250px;
		height: 250px;
		background-color: #303F9F;
		position: relative;
	}
</style>

<body>
	<div class="container-fluid colorAcentuado" id="fondoPag">
		<div class="container bg-white">
			<div class="jumbotron bg-transparent">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Crear Funciones</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row espacioBajo">
						<div class="col-sm-6">
							<div id="div_saludo">
								<h4 class="text-center fuenteTuneada colorPrincipal">Función Sencilla</h4>
							</div>
						</div>

						<div class="col-sm-6">
							<div id="div_custom">
								<h4 class="text-center fuenteTuneada colorPrincipal">Función Que Imita Al Método Grep</h4>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-6">
							<div id="div_animado"></div>
						</div>

						<div class="col-sm-6"></div>
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


			$("#div_saludo").append($.mensaje('Hola Madarfakas'));


			var nombres = ['Edward', 'Alphonse', 'Roy', 'Winly', 'Rose', 'Cornello'];

			$.bucle(nombres, function(index, value){
				$("#div_custom").append('Posición <b>'+ index +'</b>, Valor= <b>'+ value +'</b><br>');
			});


			$("#div_animado").movimiento({movimiento: 400, velocidad: 3000}, function(){
				alert('Animación Terminada');
			});
		});



		$.mensaje = function (saludo) {
			 if (saludo === undefined) {
			 	saludo = 'Hola Bebés...';
			 }
			 return saludo;
		}


		$.bucle = function (array, callback) {
			 var index = '';
			 var value = '';

			 if (callback === undefined) {
			 	callback = function () {};
			 }

			 for(val in array){
			 	index = val;
			 	value = array[val];
			 	callback(index, value);
			 }
		}


		$.fn.movimiento = function (options, callback) {
			var defaults = { 
				movimiento: 300, 
				velocidad: 1500
			};

			$.extend(defaults, options);

			if (callback === undefined) {
				callback = function(){};
			}


			this.animate({left: "+="+ defaults.movimiento}, defaults.velocidad)
				.animate({left: '-='+ defaults.movimiento}, defaults.velocidad, function(){
				callback();
			});
			
		};
	</script>
</body>
</html>