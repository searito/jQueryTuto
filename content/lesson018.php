<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Evento mouseover</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Evento Mouseover</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 col-md-3 optimizo" id="parrafo1" data-nuevo="parrafo1">
							<h3>Sengoku Nadeko</h3>
							<img src="https://vignette.wikia.nocookie.net/bakemonogatari/images/9/9b/Nadeko_bakemonogatari.png/revision/latest?cb=20151023012912&path-prefix=es" class="img-responsive img-thumbnail">
						</div>

						<div class="col-sm-6 col-md-3 optimizo" id="parrafo2" data-nuevo="parrafo2">
							<h3>Oikura Sodachi</h3>
							<img src="https://vignette3.wikia.nocookie.net/bakemonogatari1645/images/1/17/Sodachi_profile.png/revision/latest?cb=20170424065922" class="img-responsive img-thumbnail">
						</div>
						
						<div class="col-sm-6 col-md-3 optimizo" id="parrafo3" data-nuevo="parrafo3">
							<h3>Oshino Ougui</h3>
							<img src="https://pm1.narvii.com/6597/8a08c7ac5f37dd51da13b9f1e0d3d7486cfd99ea_hq.jpg" class="img-responsive img-thumbnail">
						</div>
						
						<div class="col-sm-6 col-md-3 optimizo" id="parrafo4" data-nuevo="parrafo4">
							<h3>Kanbaru Suruga</h3>
							<img src="http://yumestate.com/wp-content/uploads/2012/01/Commie-Nisemonogatari-02-0BD2EE1E.mkv_snapshot_18.56_2012.01.17_05.25.57.png" class="img-responsive img-thumbnail">
						</div>
					</div>
				</div>

				<div id="direccion" data-address="Chinameca" data-number="22" data-barrio="Yusique">Div Relleno De Datas</div>
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


			$("#direccion").mouseover(function () {
				var direccion = $("#direccion").data('address');
				var numero = $("#direccion").data('number');
				var barrio = $("#direccion").data('barrio');

				console.log(direccion + ' ' + numero + ' ' + barrio);

				//alert(direccion + ' ' + numero + ' ' + barrio);
			})


			$(".optimizo").mouseover(function(){
				var valorAtributo = $(this).attr('data-nuevo');
				console.log(valorAtributo);
				$("#" + valorAtributo).fadeOut(1500);
			});
		});
	</script>
</body>
</html>