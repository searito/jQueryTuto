<?php
	if (isset($_POST['nombre']) && isset($_POST['mail'])) {
		$nombre = $_POST['nombre'];
		$mail = $_POST['mail'];

		echo "<div class='bg-light border border-light rounded margenesInternos'>
				Saludos <b>".$nombre."</b>, Enviaremos Más Datos A Tu Correo <b>".$mail."</b>
			  </div>";
	}
?>