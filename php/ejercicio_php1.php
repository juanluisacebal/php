<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
	<h1>
		JUAN LUIS ACEBAL RICO
	</h1>
		
		<?php
			//USANDO LA FUNCION ROUND Y REDONDEANDO A 3 DECIMALES, CALCULAR CONOCIENDO EL PRECIO NETO
			//DE UN PRODUCTO (101,98) CALCULAR EL PRECIO TOTAL, SABIENDO QUE EL iva A APLICAR ES EL 19,6%
			$producto = 101.98;
			$iva = 19.6;
			echo "El resultado de ", $producto, " por ", $iva, " es ", round ($producto*(1+ 19.6/100), 3);
			
		?>
	</body>
</html>
