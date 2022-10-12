<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>


		<form action= "" method="get">
		Euros
		<input name="q" type="number" value="0" >
		<input name="Convertir" type="submit">
		</form>
		<?php	
			$euros = $_GET['q'];
			echo "La cantidad ", $euros, " en pesetas es ", $euros*166.386;
		?>
		

	</body>
</html>
