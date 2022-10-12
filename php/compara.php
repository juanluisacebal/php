<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>

		Compara números<br>

		<?php	
		
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];
			$num3 = $_GET['num3'];
			if (( $num1 >= $num2 ) && ( $num2 >= $num3 )){
				echo " El mayor es ", $num1, " luego ", $num2 , " y luego " , $num3;
			}
			else if (($num2 >= $num1) && ($num1 >= $num3)){
				echo " El mayor es ", $num2, " luego ", $num1 , " y luego " , $num3;
			}
			else if (($num3 >= $num1) && ($num1 >= $num2)){
				echo " El mayor es ", $num3, " luego ", $num1 , " y luego " , $num2;
			}
			else if (($num1 >= $num3) && ($num3 >= $num2)){
				echo " El mayor es ", $num1, " luego ", $num3 , " y luego " , $num2;
			}
			else if (($num2 >= $num3) && ($num3 >= $num1)){
				echo " El mayor es ", $num2, " luego ", $num3 , " y luego " , $num1;
			}
			else if (($num3 >= $num2) && ($num2 >= $num1)){
				echo " El mayor es ", $num3, " luego ", $num2 , " y luego " , $num1;
			}
		?>			
        <br><br>
        <a href="compara.html">>>>> Volver</a>


	</body>
</html>
