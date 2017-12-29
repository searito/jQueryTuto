<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Métodos ScrollTop y OffSet</title>

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
			<div class="jumbotron fondoClaro">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Métodos ScrollTop y OffSet</h3>
			</div>

			<div class="container">
				<div class="row espacioBajo">
					<div class="col-sm-8 border border-dark rounded text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum minus, laudantium quibusdam, suscipit eveniet cumque cupiditate atque ab 
						vel ea. Ducimus nostrum temporibus at ab aperiam magnam, cupiditate ut hic! <br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate impedit omnis iusto, earum. Molestias inventore, repudiandae eum 
						sapiente voluptates expedita sunt natus reiciendis quam totam, illum eaque non, aliquam nisi.
					</div>
				</div>

				<div class="row espacioBajo">
					<div class="col-sm-8 border border-dark rounded text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nihil mollitia quaerat recusandae sit necessitatibus similique praesentium
						incidunt facere ea, voluptatem ipsum illo repellendus ducimus. Rem voluptas maiores incidunt necessitatibus? <br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati assumenda optio dignissimos molestias. Nulla neque enim impedit
						 cupiditate libero in reiciendis sapiente, sit praesentium quasi excepturi vitae, animi, unde, optio!
					</div>
				</div>

				<div class="row espacioBajo">
					<div class="col-sm-8 border border-dark rounded text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eius eligendi ad vel, incidunt, culpa dicta deserunt, voluptatibus tenetur quo
						repudiandae aperiam rerum labore iure numquam et itaque ab placeat! <br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam aliquam, ut, aut cumque doloribus distinctio ducimus, voluptatum iusto
						 aperiam vero beatae. Molestiae voluptates quas sed incidunt! Repudiandae consequatur, doloremque eius?
					</div>
				</div>

				
				<div class="row espacioBajo">
					<div class="col-sm-8">
						<p id="parraf_sample" style="padding: 4% 0 4% 4%;">Párrafo De Muestra</p>
					</div>
				</div>


				<div class="row espacioBajo">
					<div class="col-sm-8 border border-dark rounded text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quod voluptate sed doloribus quo perferendis, ut dicta temporibus eum nobis
						 id molestiae possimus illum tenetur quia, ipsam, voluptatem at unde. <br>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorum quod, perspiciatis aperiam rerum voluptatem sed eum optio numquam
						  laborum eaque porro sint cum aliquid reprehenderit sapiente ullam facilis ratione.
					</div>
				</div>


				<div class="row espacioBajo">
					<div class="col-sm-8 border border-dark rounded text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quod voluptate sed doloribus quo perferendis, ut dicta temporibus eum nobis
						 id molestiae possimus illum tenetur quia, ipsam, voluptatem at unde. <br>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorum quod, perspiciatis aperiam rerum voluptatem sed eum optio numquam
						  laborum eaque porro sint cum aliquid reprehenderit sapiente ullam facilis ratione.
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


			var posicionParrafo = $("#parraf_sample").offset();
			console.log('Ubicación Eje Y: ' + posicionParrafo.top);

			$(window).scroll(function() {
				var posicionParrafo = $("#parraf_sample").offset();
				var posicionVentana = $(window).scrollTop();
				
				if (posicionParrafo.top < posicionVentana + 250) {
					$("#parraf_sample").addClass('colorAcentuado text-white');
				}

				else if (posicionParrafo.top > posicionVentana + 250) {
					$("#parraf_sample").removeClass('colorAcentuado text-white');
				}

				console.log('Ubicación Ventana: ' + posicionVentana);
			});
		});
	</script>
</body>
</html>