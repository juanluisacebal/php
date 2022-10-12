<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
		<br><br><br>
        <form action="numeros0resul.php" method="get">
		<?php
		if(isset($_GET['par']))
		$par=$_GET['par'];
		else $par=0; 
		if(isset($_GET['impar']))
		$impar=$_GET['impar'];
		else $impar=1; 
		?>
		<li>
		<b>Introduce numeros-</b> -- hasta que introduzcas 0:
		<input type="number" id="num" name="num"  required autofocus>
		Numero

		 <br>
		<?php echo '<input id="par" name="par" value="', $par,'" hidden>';
			echo '<input id="impar" name="impar" value="', $impar,'" hidden>';
			//echo '<input id="numero" name="numero" value="', $numero,'" hidden>';
		?>
		</li>
		
		
		
		
		

          <input type="submit" value="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Introducir número &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp">
        </form>
  </body>
</html>