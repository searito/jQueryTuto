<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Gestión De Arrays II</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
		  integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link rel="shortcut icon" href="http://ejemplocodigo.com/wp-content/uploads/2014/09/jquery-e1417606719180-150x150.png">
  	<link rel="stylesheet" href="../css/formato.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.css">
</head>
<body>
	<div class="container-fluid colorAcentuado" id="fondoPag">
		<div class="container bg-white">
			<div class="jumbotron bg-transparent">
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Gestión De Arrays II</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row espacioBajo">
						<div class="col-sm-12">
							<div class="ui blue button" data-inverted="" data-tooltip="Elimina El Último Elemento De Un Array" data-position="top left">
								Método Pop
							</div>

							<div class="ui teal button" data-inverted="" data-tooltip="Añade Un Elemento Al Final De Un Array" data-position="top left">
								Método Push
							</div>

							<div class="ui violet button" data-inverted="" data-tooltip="Elimina El Primer Elemento De Un Array" data-position="top left">
								Método Shift
							</div>

							<div class="ui purple button" data-inverted="" data-tooltip="Añade Un Elemento Al Principio De Un Array" data-position="top left">
								Método Unshift
							</div>

							<div class="ui green button" data-inverted="" data-tooltip="Busca La Posición De Un Elemento Dentro De Un Array" 
								 data-position="top left">
								Método IndexOf
							</div>

							<div class="ui black button" data-inverted="" 
								 data-tooltip="Une Todos Los Elementos De Un Array En String A Partir De Un Elemento Indicado" data-position="top left">
								Método Join
							</div>

							<div class="ui red button" data-inverted="" 
								 data-tooltip="Crea Un Array A Partir De Un String Indicando Un Separador" data-position="top left">
								Método Split
							</div>
						</div>
					</div>
					

					<div class="row espacioBajo">
						<div class="col-sm-4" id="div_pop">
							<h4 class="text-primary">Pop</h4>
						</div>

						<div class="col-sm-4" id="div_push">
							<h4 class="text-primary">Push</h4>
						</div>

						<div class="col-sm-4" id="div_shift">
							<h4 class="text-primary">Shift</h4>
						</div>
					</div>

					<div class="row espacioBajo">
						<div class="col-sm-4" id="div_unshift">
							<h4 class="text-primary">Unshift</h4>
						</div>

						<div class="col-sm-4" id="div_indexof">
							<h4 class="text-primary">IndexOf</h4>
						</div>

						<div class="col-sm-4" id="div_join">
							<h4 class="text-primary">Join</h4>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4" id="div_split">
							<h4 class="text-primary">Split</h4>
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.js"></script>

	<script>
		$(document).ready(function() {
			$("#titulo_rebote").addClass('animated bounceInDown');

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});


			//----- 	POP 	-----//
			var arrayPop = ['Gato', 'Kangrejo', 'Caracol', 'Mono', 'Serpiente'];
			arrayPop.pop();

			$.grep(arrayPop, function (value, index) {
				 $("#div_pop").append('Indice <b>'+ index +'</b> Valor = <b>'+ value +'</b><br>');
			});


			//----- 	PUSH 	-----//
			var arrayPush = ['Musubi', 'Kusano', 'Matsu', 'Tsukiumi', 'Kazehana', 'Homura'];
			arrayPush.push('Minato');

			$.grep(arrayPush, function (val, index) {
				 $("#div_push").append('Posición <b>'+ index +'</b>, Nombre = <b>'+ val +'</b><br>');
			});


			//----- 	SHIFT 	-----//
			var arrayShift = ['Gomu Gomu', 'Bara Bara', 'Moku Moku', 'Sube Sube'];
			arrayShift.shift();

			$.grep(arrayShift, function (v, i) {
				$("#div_shift").append('Pos. <b>'+ i +'<b>, Nombre = <b>'+ v +'<b/><br>');
			});


			//----- 	UNSHIFT 	-----//
			var arrayUnshift = ['Mera Mera', 'Gura Gura', 'Yuki Yuki', 'Nagi Nagi', 'Soru Soru'];
			arrayUnshift.unshift('Ope Ope');

			$.grep(arrayUnshift, function (valor, indice) {
				$("#div_unshift").append('Pos. <b>'+ indice +'<b>, Nombre = <b>'+ valor +'<b/><br>');
			});


			//----- 	INDEXOF 	-----//
			var arrayIndexOf = ['Azul', 'Verde', 'Amarillo', 'Rojo', 'Negro', 'Gris'];
			var posicion = arrayIndexOf.indexOf('Rojo');

			$("#div_indexof").append('El Color Rojo Está Ubicado En La <b>'+ posicion +'° </b>Posición Del Arreglo');


			//----- 	JOIN 	-----//
			var arrayJoin = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
			var cadena = arrayJoin.join(' - ');

			$("#div_join").append(cadena);


			//----- 	SPLIT 	-----//
			var cadenaSplit = "Is Hardbass Time With Boris The SlavKing";
			var arraySplit = cadenaSplit.split(' ');

			$.grep( arraySplit, function (valor, index) {
				 $("#div_split").append('Posción <b>'+ index +'</b>, Palabra = <b>'+ valor +'</b><br>');
			});
		});
	</script>
</body>
</html>