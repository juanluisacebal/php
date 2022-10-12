<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>

		Bisiesto<br>

		<?php	
		
			$ano = $_GET['bi'];
			if (($ano % 400) == 0 && ($ano %100 == 0)){
				echo " es bisiesto";
			}
			else{
				echo "no es bisiesto";
			}
		
		?>			



	</body>
</html>
