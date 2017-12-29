<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Slider Con Imágenes</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
		  integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="shortcut icon" href="http://ejemplocodigo.com/wp-content/uploads/2014/09/jquery-e1417606719180-150x150.png">
  	<link rel="stylesheet" href="../css/formato.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
</head>
<body>
	<div class="container-fluid colorAcentuado" id="fondoPag">
		<div class="container bg-white">
			<div class="jumbotron bg-transparent">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Slider Con Imágenes</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row espacioBajo">
						<div class="col-sm-2 pull-left">
							<button id="btn_iniciar" class="btn btn-block btn-primary" title="Iniciar Animación">
								<i class="fa fa-play"></i>
							</button>
						</div>
						
						<div class="col-sm-2 pull-right">
							<button id="btn_parar" class="btn btn-block btn-dark" title="Detener Animación">
								<i class="fa fa-stop"></i>
							</button>
						</div>
					</div>


					<div class="row espacioBajo">
						<div class="col-sm-12">
							<img src="" id="imagen" class="img-thumbnail img-responsive">
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>

	<script src="../js/estilos.js"></script>

	<script>
		var imagenes = ['http://www.speednik.com/files/2015/10/2015-10-19_03-15-27.jpg',
						'http://www.chevyhardcore.com/wp-content/blogs.dir/1/files/2015/09/2015-09-16_11-52-32.jpg',
						'http://car-from-uk.com/ebay/carphotos/full/ebay358847.jpg',
						'https://rzpict1.blob.core.windows.net/images/leboncoin.fr/RZCLBCFR1345897213/FORD-MUSTANG-0.jpg',
						'https://i.pinimg.com/originals/8a/3d/e0/8a3de02f8b8a0ee1bca326d07e46e802.jpg',
						'http://auto-zer.com/uploads/volkswagen/volkswagen-typ-2/volkswagen-typ-2-04.jpg'];

		var x = 0;
		var timer;
		
		var reproducir = function () {
			if (x > imagenes.length) {
				x = 0;
			}
			$("#imagen").attr('src', imagenes[x]);
			x++;

			timer = setTimeout('reproducir()', 2500);
		}


		var stop = function () {
			 clearTimeout(timer);
		}


		$(document).ready(function() {
			$("#titulo_rebote").addClass('animated bounceInDown');

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});

			reproducir();

			$("#btn_iniciar").click(function() {
				reproducir();
			});


			$("#btn_parar").click(function() {
				stop();
			});
		});
	</script>
</body>
</html>