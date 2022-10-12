<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>


		<form action= "" method="get">
		Pesetas
		<input name="q" type="number">
		<input name="Convertir" type="submit">
		</form>
		<?php	
			$pesetas = $_GET['q'];
			echo "La cantidad ", $pesetas, " en Euros es ", $pesetas/166.386;
		?>
		

	</body>
</html>
