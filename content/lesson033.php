<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Efectos y Animaciones</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Efectos y Animaciones</h3>
				<h4 class="text-center fuenteTuneada colorPrincipal" id="sub_rebote">Toggle, Show, Hide, FadeIn, FadeOut, SlideDown, SlideUp</h4>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row espacioBajo">
						<div class="col-sm-6">
							<h3 class="fuenteTuneada colorPrincipal text-center">Toggle</h3>
							
							<div class="row espacioBajo">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<button id="btn_toggle" class="btn btn-dark btn-block" title="Activar Toggle">
										<i class="fa fa-toggle-on"></i>
									</button>
								</div>
								<div class="col-sm-2"></div>
							</div>

							<div class="border border-dark rounded margenesInternos text-justify espacioBajo" id="div_toggle">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae suscipit vero voluptatibus dignissimos cum, totam ratione.
								Expedita, tempora, perferendis officiis aperiam atque facilis, veritatis provident quo aut repudiandae architecto beatae!
							</div>
						</div>

						
						<div class="col-sm-6">
							<h3 class="fuenteTuneada colorPrincipal text-center">Hide / Show</h3>

							<div class="row espacioBajo">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<button id="btn_hide" class="btn btn-block btn-primary" title="Activar Efectos" value="Ocultar">
										<i class="fa fa-eye-slash"></i> / <i class="fa fa-eye"></i>
									</button>
								</div>
								<div class="col-sm-2"></div>
							</div>

							<div class="border border-dark rounded text-justify margenesInternos" id="div_hide">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eos, sed ab fuga ullam, repellendus, esse unde deserunt ipsam eum
								obcaecati id iste? Totam, autem, incidunt? Id mollitia delectus, sed?
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-6">
							<h3 class="fuenteTuneada colorPrincipal text-center">FadeOut / FadeIn</h3>
							
							<div class="row espacioBajo">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<button id="btn_fade" class="btn btn-block btn-light" title="Activar" value="Ocultar">
										<i class="fa fa-eye-slash"></i> / <i class="fa fa-eye"></i>
									</button>
								</div>
								<div class="col-sm-2"></div>
							</div>

							<div id="div_fade" class="border border-dark rounded text-justify margenesInternos">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur reiciendis a eum placeat, mollitia, odit atque laboriosam
								necessitatibus, repellat ipsa excepturi. Doloremque tempora, velit fugiat quam. Quisquam, dolore voluptatibus similique.
							</div>
						</div>


						<div class="col-sm-6">
							<h3 class="fuenteTuneada colorPrincipal text-center">SlideUp / SlideDown</h3>
							
							<div class="row espacioBajo">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<button id="btn_slide" class="btn btn-block btn-info" title="Activar" value="Ocultar">
										<i class="fa fa-angle-up"></i> / <i class="fa fa-angle-down"></i>
									</button>
								</div>
								<div class="col-sm-2"></div>
							</div>

							<div id="div_slide" class="border border-dark rounded text-justify margenesInternos">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi a nam delectus atque, accusamus, maxime sed nulla, at dolor 
								velit alias dolore totam commodi, qui consectetur. Quia, corporis, nobis. Optio!
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
			$("#sub_rebote").addClass('animated fadeInLeft');

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});


			$("#btn_toggle").click(function() {
				$("#div_toggle").toggle(2000, function(){
					alert('Animación Completa...');
				});
			});


			$("#btn_hide").click(function() {
				if ($(this).val() == "Ocultar") {
					$("#div_hide").hide(1500, function () {
						 $("#btn_hide").val("Mostrar");
					});
				}else{
					$("#div_hide").show(1000 , function() {
						$("btn_hide").val("Ocultar");
					});
				}
			});


			$("#btn_fade").on('click', function() {
				if ($(this).val() === "Ocultar") {
					$("#div_fade").fadeOut(2000, function() {
						$("#btn_fade").val("Mostrar");
					});
				}else{
					$("#div_fade").fadeIn(1500, function() {
						$("#btn_fade").val("Ocultar");
					});
				}
			});


			$("#btn_slide").on('click', function() {
				if ($(this).val() === "Ocultar") {
					$("#div_slide").slideUp(3000, function() {
						 $("#btn_slide").val("Mostrar");
					});
				}else{
					$("#div_slide").slideDown(3000, function() {
						$("#btn_slide").val("Ocultar");
					});
				}
			});
		});
	</script>
</body>
</html>