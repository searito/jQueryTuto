<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Gestión De Arrays</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Gestión De Arrays</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-4">
							<div class="col-sm-12" id="div_grep">
								<h3 class="fuenteTuneada colorPrincipal text-center">Grep</h3>
							</div>
						</div>

						<div class="col-sm-8">
							<div class="row espacioBajo">
								<div class="col-sm-12">
									<h3 class="fuenteTuneada colorPrincipal text-center">Each</h3>
								</div>

								<div class="col-sm-6">
									<ul class="list-group text-center" id="lista_each">
										<li class="list-group-item list-group-item-primary">Luffy</li>
										<li class="list-group-item">Zoro</li>
										<li class="list-group-item list-group-item-primary">Nami</li>
										<li class="list-group-item">Ussop</li>
										<li class="list-group-item list-group-item-primary">Sanji</li>
									</ul>
								</div>

								<div class="col-sm-6" id="div_each">
									<button class="btn btn-sm btn-primary margenSuperior5" data-toggle="modal" data-target="#modalEach">
										Ver Otro Ejemplo
									</button>

									<div class="modal fade" id="modalEach" role="dialog">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="fuenteTuneada colorPrincipal modal-title">Ejemplo Extra Each</h5>

													<button class="close" data-dismiss="modal" aria-label="close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>


												<div class="modal-body" id="div_each2"></div>


												<div class="modal-footer">
													<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>


					<div class="row espacioBajo">
						<div class="col-sm-6">
							<h3 class="fuenteTuneada colorPrincipal text-center">MakeArray</h3>

							<div class="row">
								<div class="col-sm-5">
									<ul class="list-group text-center" id="lista_makeArray">
										<li class="list-group-item list-group-item-secondary">Java</li>
										<li class="list-group-item list-group-item-secondary">C</li>
										<li class="list-group-item list-group-item-secondary">PHP</li>
										<li class="list-group-item list-group-item-secondary">Python</li>
										<li class="list-group-item list-group-item-secondary">C#</li>
									</ul>
								</div>

								<div class="col-sm-7">
									<div id="div_makeArray"></div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<h3 class="fuenteTuneada colorPrincipal text-center">Map</h3>

							<div id="div_map"></div>
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


			//----	GREP 	---//
			var arrayGrep = [1, 2, 3, 4, 5, 6, 7, 8, 9];

			$.grep(arrayGrep, function (value, index) {
				 $("#div_grep").append("Indice: <b>"+ index +'</b> '+ " Valor: <b>"+ value + "</b><br>");
			});


			//----	EACH 	----//
			$("#lista_each li").each(function(index) {
				$("#div_each").prepend("Indice <b>"+ index +"</b> Valor = <b>"+ $(this).text() +"</b><br>");
			});

			var arrayEach = ["Luffy", "Zoro", "Nami", "Ussop", "Sanji", "Vivi", "Chopper", "Robin", "Franky", "Brook", "Jinbe", "Carrot"];

			$.each(arrayEach, function(index, val) {
				 $("#div_each2").append('Indice <b>'+ index +'</b>, Valor = <b>'+ val +'</b><br>');
			});


			//----	INARRAY 	----//
			var arrayInArray = ["Rojo", "Verde", "Naranja", "Amarillo", "Azul", "Celeste", "Rosa", 
								"Morado", "Negro", "Purpura", "Marrón", "Blanco"];
			var color = "Purpura";

			if ($.inArray(color, arrayInArray) > -1) {
				console.log('InArray ===> El Color ' + color +' Ha Sido Encontrado');
			}else{
				console.log('InArray ===> El Color ' + color +' No Ha Sido Encontrado');
			}


			//----	MAKEARRAY 	----//
			var elementos = $("#lista_makeArray li");
			var arrayMakeArray = $.makeArray(elementos);

			$.each(arrayMakeArray, function(index) {
				 $("#div_makeArray").append("Indice <b>"+ index +"</b> Val. = <b>"+ $(this).text() +"</b><br>");
			});


			//---- 		MAP 	----//
			var arrayMap = ['Rias', 'Akeno', 'Koneko', 'Kiba', 'Gasper', 'Issei', 'Asia', 'Xenobia', 'Rossweisse'];

			$.map(arrayMap, function(index, valor) {
				$("#div_map").append('Indice <b>'+ valor +'</b> Valor <b>'+ index +'</b><br>');
			});



			//---- 		LENGTH  	----//
			console.log('Length ====> Hay '+ $("li").length +' Elementos Tipo Lista');
		});
	</script>
</body>
</html>