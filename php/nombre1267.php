<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body><center>
		<table border="18" bgcolor="#00FFFF">
		<tbody>
		<td>

		<?php
			$nombre = "Juan Luis Acebal";
			$direccion = " Calle Hellin 45 4c";
			$ciudad = "Albacete";
			$telefono = "697494342";
			$a= 9;
			$b= 26;
			$edad = $a + $b;
			echo " <b><u>Nombre:</u></b>&nbsp&nbsp","<center>",  $nombre , "</center>";
			echo "<br><br> <b><u>Edad:</u></b>&nbsp", "<center>", $edad, "</center>";
			echo "<br><br>", "<b><u>Direccion:</u></b>&nbsp&nbsp", "<center>", $direccion, "</center>";
			echo "<br><br><b><u>Ciudad:</u></b>&nbsp&nbsp", "<center>", $ciudad, "</center>";
			echo "<br><br><b><u>Telefono:</u></b>&nbsp&nbsp", "<center>", $telefono, "</center>";
		?>
		<br><br>
		
		<?php
			
			//print_r(get_defined_vars());
			
		?>
		</td>
		</center>
		</tbody>
		</table>
	</body>
</html>
