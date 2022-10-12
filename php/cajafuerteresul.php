<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body backgroundcolor=green>

		</b><br><br>
		<form action="cajafuerte.php" method="get">
        <?php
		//$intentos=4;
		if(isset($_GET['intentos']))
		$intentos=$_GET['intentos'];
		$intentos=$intentos-1;
		$p1=$_GET['pregunta1'];
		$p2=$_GET['pregunta2'];
		$p3=$_GET['pregunta3'];
		$p4=$_GET['pregunta4'];
		$pass=$p1*1000+$p2*100+$p3*10+$p4;
		//echo '<b><br>', $p1,$p2,$p3,$p4, "PASS",$pass,'</b><br>';	
		if ($intentos>0 && $pass!=1111){
		echo "Te quedan: ", $intentos;
        echo ' <br><br><br><br><br>';
		echo '<form action="cajafuerte.php" method=get>';
		echo '<input type="submit"  value="Hacer de nuevo el test">';
		}
		else if ($pass==1111 && $intentos>=0)
		{
			echo "<font size=80 color=green face=\"Comic Sans MS,arial,verdana\"> GANASTE</font>";
		}
		else if ($intentos==0)
			echo "<font size=80 color=red face=\"Comic Sans MS,arial,verdana\"> PERDISTE</font>";

		echo '<input id="intentos" name="intentos" value=', $intentos, ' hidden>'
		?>
		</form>

  </body>
</html>