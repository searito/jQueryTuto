<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Manejo De Strings</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Manejo De Strings</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="row espacioBajo">
								<div class="col-sm-4">
									<button id="btn_lenght" class="btn btn-block btn-dark" title="Obtener Total">
										<i class="fa fa-diamond"></i>
									</button>
								</div>

								<div class="col-sm-4">
									<button id="btn_upper" class="btn btn-block btn-primary" title="Pasar A Mayúsculas">
										<i class="fa fa-arrow-up"></i>
									</button>
								</div>

								<div class="col-sm-4">
									<button id="btn_lower" class="btn btn-block btn-info" title="Pasar A Minúsculas">
										<i class="fa fa-arrow-down"></i>
									</button>
								</div>
							</div>

							<div class="row espacioBajo">
								<div class="col-sm-4">
									<button id="btn_replace" class="btn btn-light btn-block" title="Reemplazar Contenido">
										<i class="fa fa-eraser"></i>
									</button>
								</div>

								<div class="col-sm-4">
									<button id="btn_index" class="btn btn-block btn-warning" title="Buscar">
										<i class="fa fa-search"></i> <i class="fa fa-arrow-right"></i>
									</button>
								</div>
								
								<div class="col-sm-4">
									<button id="btn_last" class="btn btn-secondary btn-block" title="Buscar">
										<i class="fa fa-search"></i> <i class="fa fa-arrow-left"></i>
									</button>
								</div>
							</div>


							<div class="form-group">
								<label class="sr-only">Buscar</label>
								
								<div class="input-group mb-2 mb-sm-0">
									<div class="input-group-addon">
										<i class="fa fa-search"></i>
									</div>
									<input type="text" id="txt_busqueda" class="form-control" placeholder="Buscar En Contenido">
								</div>
							</div>

							<div class="text-justify margenesInternos border border-dark rounded" id="div_reemplazo">
								La serie de Monogatari se centra en Koyomi Araragi, un estudiante de tercer año de instituto que es ahora casi humano después 
								de haber sido vampiro por un tiempo. Un día, una compañera de clase llamada Hitagi Senjōgahara, quien nunca habla con nadie, 
								cae desde una alta escalera en los brazos de Koyomi. Él descubre que Hitagi no pesa casi nada, una contradicción física. A pesar
								de ser amenazado por ella, Araragi le ofrece su ayuda, y la presenta a Meme Oshino, un hombre excéntrico de mediana edad viviendo
								en un edificio abandonado que le ayudó a dejar de ser un vampiro.
							</div>
							
						</div>

						<div class="col-sm-6">
							<div id="div_respuestas" class="espacioBajo"></div>

							<div id="div_form" class="border border-secondary rounded margenesInternos">
								<form id="frm_validation">
									<div class="form-group">
										<label for="">Contenido</label>
										<input type="text" id="txt_content" class="form-control">
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-2"></div>
											<div class="col-sm-8">
												<button id="btn_validar" class="btn btn-block btn-success" title="Validar">
													<i class="fa fa-check"></i><i class="fa fa-check"></i>
												</button>
											</div>
											<div class="col-sm-2"></div>
										</div>
									</div>
								</form>
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


			$("#btn_lenght").click(function() {
				var total = $("#txt_busqueda").val().length;
				$("#div_respuestas").html('Has Ingresado <b>'+ total +'</b> Caracteres');
			});


			$("#btn_upper").click(function() {
				var mayusculas = $("#txt_busqueda").val().toUpperCase();
				$("#div_respuestas").html('<b>'+ mayusculas +'</b>');
			});


			$("#btn_lower").click(function() {
				var minusculas = $("#txt_busqueda").val().toLowerCase();
				$("#div_respuestas").html('<b>'+ minusculas +'</b>');
			});


			$("#btn_replace").click(function() {
				var string = $("#div_reemplazo").text().replace(/Araragi/gi, '<b>Koyo Koyo</b>'); //gi ===> g = reemplazar todo, i = ignorar Mayus y Minus
				$("#div_reemplazo").html(string);
			});


			$("#btn_index").click(function() {
				//**	indexOf Busca De Izquierda A Derecha	**//
				var string = $("#txt_busqueda").val();
				var posicion = $("#div_reemplazo").text().indexOf(string);

				if (posicion >= 0) {
					alert('Existen Coincidencias Con '+ string +' En La Posición '+ posicion);
				}else{
					alert('No Hay Coincidencias Con '+ string);
				}
			});


			$("#btn_last").click(function() {
				//**	indexOf Busca De Derecha A Izquierda	**//
				var string = $("#txt_busqueda").val();
				var posicion = $("#div_reemplazo").text().lastIndexOf(string);

				if (posicion >= 0) {
					alert('Existen Coincidencias Con '+ string +' En La Posición '+ posicion);
				}else{
					alert('No Hay Coincidencias Con '+ string);
				}
			});


			$("#btn_validar").click(function(e) {
				var valor = $("#txt_content").val();
				e.preventDefault();

				if(valor ===""){
					alert('Debes Escribir Algo...');
				}
				else if (!valor.match(/^[a-záéóóúàèìòùäëïöüñ\s]+$/i)) {
					alert('Los Caracteres Latinos y Numéricos No Son Admitidos...');
				}else{
					alert('Enviando Datos...');
					$("#frm_validation").submit();
				}
			});


			var cadena = "Hola Mundo";
			console.log('Función substr: '+ cadena.substr(0, 4));
			console.log('Función substr: '+ cadena.substr(-5));
			console.log('Función substr: '+ cadena.substr(3, 6));
		});
	</script>
</body>
</html>