<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>jQuery > jQuery Validate</title>

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
				<h3 class="text-center fuenteTuneada colorPrincipal titulos" id="titulo_rebote">Validar Formularios Con jQuery Validate</h3>
			</div>

			<div class="card espacioBajo fondoClaro">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-2"></div>

						<div class="col-sm-8">
							<div class="border border-light rounded margenesInternos bg-light">
								<form method="POST" id="form_validate">
									<div class="form-group">
										<label class="colorPrincipal">Correo Electrónico</label>
										<input type="email" id="txt_mail" class="form-control" name="txt_mail">
									</div>

									<div class="form-group">
										<label class="colorPrincipal">Edad</label>
										<input type="text" name="txt_edad" id="txt_edad" class="form-control">
									</div>

									<div class="form-group">
										<label class="colorPrincipal">Latinos</label>
										<input type="text" name="txt_latinos" id="txt_latinos" class="form-control">
									</div>

									<div class="form-group">
										<label class="colorPrincipal">Mensaje</label> <div id="contador"></div>

										<textarea name="" id="area_text" cols="30" rows="6" class="form-control"></textarea>
									</div>


									<div class="form-group">
										<div class="row">
											<div class="col-sm-4"></div>
											<div class="col-sm-4">
												<button id="btn_validate" class="btn btn-primary btn-block" type="submit">
													Enviar
												</button>
											</div>
											<div class="col-sm-4"></div>
										</div>
									</div>
								</form>
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

	<script src="../js/maxLength/maxLength.js"></script>

	<script src="../js/estilos.js"></script>

	<script>
		$(document).ready(function() {
			$("#titulo_rebote").addClass('animated bounceInDown');

			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});


			//----- 	CUSTOM METODO PARA VALIDAR 	-----//

			$.validator.addMethod('latinos', function (value, element) {
				return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ\s]+$/i.test(value);
			});


			$("#btn_validate").click(function(e) {

				$("#form_validate").validate({
					rules: {
						txt_mail:{
							required: true,
							email: true,
							minlength: 8,
							maxlength: 50
						},

						txt_edad: {
							required: true,
							digits: true,
							minlength: 1,
							maxlength: 3
						},

						txt_latinos:{
							required: true,
							latinos: true,
							minlength: 5,
							maxlength: 25
						}
					},

					messages: {
						txt_mail: {
							required: 'El Campo Es Obligatorio',
							email: 'Formato De Correo Incorrecto',
							minlength: 'Debe Tener Un Mínimo De 8 Caracteres',
							maxlength: 'Número De Caracteres Excedidos'
						},

						txt_edad: {
							required: 'El Campo Es Obligatorio',
							digits: 'Solo Se Admiten Caracteres Numéricos',
							minlength: 'Debe Tener Un Mínimo De 1 Caracteres',
							maxlength: 'Número De Caracteres Excedidos'
						},

						txt_latinos: {
							required: 'El Campo Es Obligatorio',
							latinos: 'Solo Aceptan Letras',
							minlength: 'Debe Tener Un Mínimo De 5 Caracteres',
							maxlength: 'Número De Caracteres Excedidos'
						}
					}
				});

				e.preventDefault();
			});

			
			$("#area_text").maxLength(250, {showNumber: "#contador"});
		});
	</script>
</body>
</html>