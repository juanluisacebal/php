<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body backgroundcolor=green>

		</b><br><br>
		<form action="numeros0.php" method="get">
        <?php
		$impar=$_GET['impar'];
		$par=$_GET['par'];
		$num=$_GET['num'];
		if ($num%2==0){
			$par=$par+$num;
			echo "<font size=6 color=GRAY face=\"Comic Sans MS,arial,verdana\">Ultimo introducido: </font>";
			echo "<font size=4 color=#D433FF face=\"Comic Sans MS,arial,verdana\">Par:</font>";
			echo "<font color=LIME size=5> ", $par," </font> ";
		}
		if ($num%2!=0){
			$impar=$impar*$num;
			echo "<font size=6 color=GRAY face=\"Comic Sans MS,arial,verdana\">Ultimo introducido: </font>";
			echo "<font size=4 color=#D433FF face=\"Comic Sans MS,arial,verdana\">Impar:</font>";
			echo "<font color=TEAL size=5> ", $impar," </font> ";
			
			
		}
		if($num!=0){
		
		echo '<input id="par" name="par" value=', $par, ' hidden>';
		echo '<input id="impar" name="impar" value=', $impar, ' hidden><br>';
		echo '<input type="submit"  value="Seguir introduciendo números">';
		}
		else{
			echo "<font size=20 color=green face=\"Comic Sans MS,arial,verdana\"> <br>FINAL: PAR: </font>";
			echo "<font size=15 color=red face=\"Comic Sans MS,arial,verdana\">", $par, "</font>";
			echo "<font size=20 color=green face=\"Comic Sans MS,arial,verdana\">   IMPAR:</font>";
			echo "<font size=15 color=red face=\"Comic Sans MS,arial,verdana\">", $impar, "</font>";
		}
		?>
		</form>

  </body>
</html>