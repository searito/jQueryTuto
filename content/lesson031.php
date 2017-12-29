<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Eventos Resize y Scroll</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Eventos Resize y Scroll</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<h3 class="text-center fuenteTuneada">Resize</h3>
							
							<div id="dimensiones"></div>
						</div>

						<div class="col-sm-6">
							<h3 class="text-center fuenteTuneada">Scroll</h3>

							<div id="posicion" class="espacioBajo"></div>

							<div id="caja_scroll" class="text-justify margenesInternos">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe unde laudantium consectetur dolore consequuntur eligendi incidunt praesentium, molestiae vero sed. Non est atque, debitis excepturi consequatur saepe dolorem odio vel. 
								</p>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod at soluta et accusantium officiis consectetur laudantium delectus, nobis eaque voluptatem pariatur atque blanditiis voluptatibus corporis mollitia veritatis cumque rem, aspernatur!
								</p>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error magnam odit in tempore, provident assumenda molestiae quam veritatis perspiciatis quod aspernatur vitae. Quasi doloremque pariatur ipsum nemo porro eligendi sunt.
								</p>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa aut, ullam excepturi consequuntur id fugit suscipit nihil repudiandae quod nobis? At a, odit facere exercitationem praesentium enim quae alias. Iste?
								</p>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ad enim possimus, minus sunt iusto itaque facere repellendus 
									aperiam quas commodi odio quis sapiente accusantium, eaque sed, cum molestiae velit!
								</p>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eos, deleniti voluptatum. Excepturi dolores inventore 
									reiciendis eveniet tempore voluptatibus ratione libero magnam officiis, aut itaque nemo labore provident iusto, at!
								</p>
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


			$(window).resize(function() {
				var ancho = $(this).width();
				var largo = $(this).height();

				$("#dimensiones").html('El Ancho De La Ventana Es <b class="text-primary">'+ 
										ancho +'</b><br>El Largo De La Ventana Es <b class="text-primary">'+
										 largo +'</b>');
			});


			$("#caja_scroll").scroll(function() {
				$("#posicion").html('Posición Del Scroll: <b class="text-primary">'+ $(this).scrollTop() +'</b>');
			});
		});
	</script>
</body>
</html>