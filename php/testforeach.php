<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
        Test sobre conocimientos en 
		<b>
		implantaciones web
		</b>:<br><br>
		<u>Cada pregunta con una sóla respuesta es 1 en acierto o 0 en error.<br></u><br><br>
		<br>El asterisco (*) es la respuesta correcta, lo dejo marcado para facilitar su corrección.  
		<br><br>
		<br><br>
        <?php
		$nota=0;
		foreach ($_GET as $pregunta=>$respuesta){
		if($respuesta=='b'){
		$nota++;
		}
		}
		if ($nota>=5)
			echo "Prueba superada";
		if ($nota>=3 && $nota<5)
			echo "Necesitas repasar";
		if ($nota<3)
			echo "Hay que volver a estudiar el tema";
		echo "<br>La nota es <b>", $nota, "</b> sobre 10";
	
		
		
        ?>
		
        <br><br><br><br><br>
		<form action="testforeach.html">
		<input type="submit" value="Hacer de nuevo el test">
		</form>

  </body>
</html>