<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > Validación De Formularios</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Validación De Fórmularios</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-2"></div>

						<div class="col-sm-8">
							<div class="card" style="background-color: #d1d1d1;">
								<div class="card-body">
									<form>
										<div class="form-group">
											<label for="">Nombre</label>
											<input type="text" id="txt_name" class="form-control">
											<span id="id1"></span>
										</div>

										<div class="form-group">
											<label for="">Apellido</label>
											<input type="text" id="txt_apellido" class="form-control">
											<span id="id2"></span>
										</div>

										<div class="form-group">
											<label for="">Contraseña (8 Caracteres Máximo)</label>
											<input type="password" id="txt_pwd1" class="form-control">
											<span id="id3"></span>
										</div>

										<div class="form-group">
											<label for="">Repite La Contraseña</label>
											<input type="password" id="txt_pwd2" class="form-control">
											<span id="id4"></span>
										</div>

										<div class="row">
											<div class="col-sm-4"></div>
											<div class="col-sm-4">
												<button id="btn_send" class="btn btn-primary btn-block">
													<i class="fa fa-envelope-o" aria-hidden="true"></i>
												</button>
											</div>
											<div class="col-sm-4"></div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div class="col-sm-2"></div>
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


			$("#txt_pwd1").focusin(function() {
				$(this).css('backgroundColor', '#BDBDBD');
			});


			$("#txt_pwd1").focusout(function() {
				$(this).css('backgroundColor', '#fff');
				
				if($(this).val().length === 0){
					$("#id3").html('<span class="text-danger font-weight-bold">Debes Ingresar Una Contraseña</span>');
				}
				else if($(this).val().length > 0 && $(this).val().length <= 3){
					$("#id3").html('<span class="text-danger font-weight-bold">Contraseña Muy Corta</span>');
				}
				else if ($(this).val().length > 3 && $(this).val().length <= 8) {
					$("#id3").html('<span class="text-success font-weight-bold">Contraseña Válida</span>');
				}else{
					$("#id3").html('<span class="text-danger font-weight-bold">Contraseña Demasiado Larga</span>');
				}
			});


			$("#txt_pwd2").focusin(function() {
				$(this).css('backgroundColor', '#BDBDBD');
			});


			$("#txt_pwd2").focusout(function() {
				$(this).css('backgroundColor', '#fff');

				if($(this).val().length == 0){
					$("#id4").html('<span></span>');
				}
				else if ($(this).val().length > 3 && $(this).val().length <= 8) {
					if ($("#txt_pwd1").val() === $(this).val()) {
						$("#id4").html('<span class="text-success font-weight-bold">Contraseñas Iguales</span>');
					}else {
						$("#id4").html('<span class="text-danger font-weight-bold">Las Contraseñas No Coinciden</span>');
					}
				}else{
					$("#id4").html('<span class="text-danger font-weight-bold">Error Máximo 8 Caracteres</span>');
				}
			});
		});
	</script>
</body>
</html>