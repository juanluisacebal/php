<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
        <?php
		$numero = new SplFixedArray(20);
		//$cuadrado = new SplFixedArray(20);
		$cubo = new SplFixedArray(20);
		$i=0;
		foreach  ($numero as $alea){
		$alea=rand(0,100);
		$cuadrado[] = $alea * $alea;
		$cubo[$i]=$alea*$alea*$alea;
		$numero[$i]=$alea;
		$i++;
		}
		echo " <table border=2>";
				echo "<tr><td><b>Numero:  </b></td><td><b>Cuadrado: </b></td><td><b> Cubo:  </b></td></tr>";
	
		for($i=0;$i<20;$i++){
			echo "<tr><td>", $numero[$i], " </td><td>", $cuadrado[$i], "</td><td>", $cubo[$i], " </td></tr>";
		}
        ?>       
		<form action="buclesE1.php">
		<tr><td>
		<input type="submit" value="Otra vez">
		</td>
		<td>
		<input type="submit" value="Si...">
		</td><td>
		<input type="submit" value=" Quieres">
		</td>
		</tr>
		</form>
		</table>


  </body>
</html>