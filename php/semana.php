<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>

		Dia semana<br>

		<?php	
		
			$num1 = $_GET['num1'];
			if ($num1 == 1){
				echo "Es lunes";
			}
						if ($num1 == 2){
				echo "Es martes";
			}
						if ($num1 == 3){
				echo "Es miercoles";
			}
						if ($num1 == 4){
				echo "Es jueves";
			}
						if ($num1 == 5){
				echo "Es viernes";
			}					if ($num1 == 6){
				echo "Es sabado";
			}					if ($num1 == 7){
				echo "Es domingo";
			}
			
		?>			



	</body>
</html>
