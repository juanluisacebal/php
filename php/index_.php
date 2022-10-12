<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<table border="3">
		<tbody>
		<tr>
			<td>Esto es en HTML <br><br></td>
			<td>Y ahora en php: <br><br></td>
		</tr>
		<?php echo "¡Hola mundo!";?><br>
		<?php echo "<b>";?><br>
			Negrita  
		<?php echo "</b>";?><br>
		<?php echo "<u>";?><br>
			Subrallado  
		<?php echo "</u>";?><br>
		<br>
		<?php
			$nombre = "Juan Luis Acebal&nbsp";
			$a= 8;
			$b= 26;
			$edad = " muy joven &nbsp, &nbsp&nbsp&nbsp&nbsp";
			echo "Mi nombre es ,", $nombre , "<br> y mi edad: ", $edad, " ", $a+$b;
		?>
		<br><br>
		
		<?php
			
			//print_r(get_defined_vars());
			
		?>
		</tbody>
		</table>
	</body>
</html>
