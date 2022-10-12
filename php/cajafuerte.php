<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>

        <form action="cajafuerteresul.php" method="get">
		<?php
		if(isset($_GET['intentos']))
		$intentos=$_GET['intentos'];
		else $intentos=4; ?>
		<li>
		<b>Caja fuerte-</b>Tienes <?php

		echo "ahora ", $intentos ?> oportunidades<br>
		<id="intentos" name="intentos" value='4'>
		<input type="radio" id="pregunta1" name="pregunta1" value="0" checked>
		0 
		<input type="radio" id="pregunta2" name="pregunta2" value="0" >
		0 
		<input type="radio" id="pregunta3" name="pregunta3" value="0" >
		0 
		<input type="radio" id="pregunta4" name="pregunta4" value="0" >
		0 <br>
		

		<input type="radio" id="pregunta1" name="pregunta1" value="1" >
		1 
		<input type="radio" id="pregunta2" name="pregunta2" value="1" >
		1 
		<input type="radio" id="pregunta3" name="pregunta3" value="1" >
		1 
		<input type="radio" id="pregunta4" name="pregunta4" value="1" checked>
		1 <br>


		<input type="radio" id="pregunta1" name="pregunta1" value="2" >
		2 
		<input type="radio" id="pregunta2" name="pregunta2" value="2" >
		2
		<input type="radio" id="pregunta3" name="pregunta3" value="2" >
		2 
		<input type="radio" id="pregunta4" name="pregunta4" value="2" >
		2 <br>
		
				<input type="radio" id="pregunta1" name="pregunta1" value="3" >
		3 
		<input type="radio" id="pregunta2" name="pregunta2" value="3" >
		3 
		<input type="radio" id="pregunta3" name="pregunta3" value="3" >
		3 
		<input type="radio" id="pregunta4" name="pregunta4" value="3" >
		3 <br>
		
		
				<input type="radio" id="pregunta1" name="pregunta1" value="4" >
		4 
		<input type="radio" id="pregunta2" name="pregunta2" value="4" >
		4 
		<input type="radio" id="pregunta3" name="pregunta3" value="4" >
		4 
		<input type="radio" id="pregunta4" name="pregunta4" value="4" >
		4 <br>
		
		
				<input type="radio" id="pregunta1" name="pregunta1" value="5" >
		5 
		<input type="radio" id="pregunta2" name="pregunta2" value="5" checked>
		5 
		<input type="radio" id="pregunta3" name="pregunta3" value="5" >
		5 
		<input type="radio" id="pregunta4" name="pregunta4" value="5" >
		5 <br>
		
		
				<input type="radio" id="pregunta1" name="pregunta1" value="6" >
		6 
		<input type="radio" id="pregunta2" name="pregunta2" value="6" >
		6 
		<input type="radio" id="pregunta3" name="pregunta3" value="6" >
		6 
		<input type="radio" id="pregunta4" name="pregunta4" value="6" >
		6 <br>
		
		
		
				<input type="radio" id="pregunta1" name="pregunta1" value="7" >
		7 
		<input type="radio" id="pregunta2" name="pregunta2" value="7" >
		7 
		<input type="radio" id="pregunta3" name="pregunta3" value="7" checked>
		7 
		<input type="radio" id="pregunta4" name="pregunta4" value="7" >
		7 <br>
		
		
				<input type="radio" id="pregunta1" name="pregunta1" value="8" >
		8 
		<input type="radio" id="pregunta2" name="pregunta2" value="8" >
		8 
		<input type="radio" id="pregunta3" name="pregunta3" value="8" >
		8 
		<input type="radio" id="pregunta4" name="pregunta4" value="8" >
		8 <br>

		<input type="radio" id="pregunta1" name="pregunta1" value="9" >
		9 
		<input type="radio" id="pregunta2" name="pregunta2" value="9" >
		9 
		<input type="radio" id="pregunta3" name="pregunta3" value="9" >
		9 
		<input type="radio" id="pregunta4" name="pregunta4" value="9" >
		9 <br>
		<?php echo '<input id="intentos" name="intentos" value="', $intentos,'" hidden>';?>
		</li>
		
		
		
		
		

          <input type="submit" value="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ver resultado &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp">
        </form>
  </body>
</html>