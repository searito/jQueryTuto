<?php
	if (isset($_POST['nombre']) && isset($_POST['apellidos'])) {
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];

		echo "<div class='text-center fuenteTuneada bg-light colorPrincipal espacioBajo margenesInternos border border-dark rounded'>
				<h3>El Nombre Ingresado Es ".$nombre."</h3>
			  </div>";


	  	echo "<div class='text-center fuenteTuneada bg-light colorPrincipal espacioBajo margenesInternos border border-dark rounded'>
				<h3>El Apellido Ingresado Es ".$apellidos."</h3>
			  </div>";		  
	}
?>