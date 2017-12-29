<?php
	if (isset($_GET['respuesta'])) {
		$respuesta = $_GET['respuesta'];


		switch ($respuesta) {
			case 'text':
				echo '<div class="border border-danger rounded bg-danger margenesInternos">
						<div class="row text-center text-white fuenteTuneada">
							<div class="col-sm-4">
								<i class="fa fa-exclamation-triangle fa-2x"></i>
							</div>

							<div class="col-sm-8">
								<h4>Error, Respuesta Incorrecta...!!!</h4>
							</div>
						</div>
					  </div>';
				break;

			case 'val':
				echo '<div class="border border-success rounded bg-success margenesInternos">
						<div class="row text-center text-white fuenteTuneada">
							<div class="col-sm-4">
								<i class="fa fa-check-circle fa-2x"></i>
							</div>

							<div class="col-sm-8">
								<h4 class="">Correcto...!!!</h4>
							</div>
						</div>
					  </div>';
				break;

			case 'html':
				echo '<div class="border border-danger rounded bg-danger margenesInternos">
						<div class="row text-center text-white fuenteTuneada">
							<div class="col-sm-4">
								<i class="fa fa-exclamation-triangle fa-2x"></i>
							</div>

							<div class="col-sm-8">
								<h4 class="">Error, Respuesta Incorrecta...!!!</h4>
							</div>
						</div>
					  </div>';
				break;
		}
	}
?>