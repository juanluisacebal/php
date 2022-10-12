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
		<u>Cada pregunta con una sóla respuesta es 1 en acierto o 0 en error.<br>
		En las preguntas 4, 6 y 8 las respuestas incorrectas restan más que las correctas, <br>pero la nota mínima en cada una de esas 
		preguntas siempre es 0 y la máxima 1</u><br><br>
		<br>El asterisco (*) es la respuesta correcta, lo dejo marcado para facilitar su corrección.  En las preguntas con múltiples opciones,
		<br>también dejo cuánto resta o suma cada pregunta.
		<br><br>
        <?php
		$pregunta1='a';
		$pregunta2='a';
		$pregunta3='a';
		
		$pregunta4a='a';
		$pregunta4b='a';
		$pregunta4c='a';
		$pregunta4d='a';		
		
		$pregunta5='a';
		$pregunta6a='a';	
		$pregunta6b='a';	
		$pregunta6c='a';	
		$pregunta6d='a';	
		$pregunta6e='a';	
		
		$pregunta7='a';
		$pregunta8='a';	
		$pregunta8a='a';	
		$pregunta8b='a';	
		$pregunta8c='a';	
		$pregunta8d='a';	
		$pregunta8e='a';	
		$pregunta9='a';
		$pregunta10='a';
		
		if(isset($_GET['pregunta1']))
		$pregunta1=$_GET['pregunta1'];
		if(isset($_GET['pregunta2']))
		$pregunta2=$_GET['pregunta2'];
		if(isset($_GET['pregunta3']))
		$pregunta3=$_GET['pregunta3'];
	
		if(isset($_GET['pregunta4a']))
		$pregunta4a = $_GET['pregunta4a'];
		if(isset($_GET['pregunta4b']))
		$pregunta4b = $_GET['pregunta4b'];		
		if(isset($_GET['pregunta4c']))
		$pregunta4c = $_GET['pregunta4c'];
		if(isset($_GET['pregunta4d']))
		$pregunta4d = $_GET['pregunta4d'];
	
		if(isset($_GET['pregunta5']))
		$pregunta5=$_GET['pregunta5'];	
	
		if(isset($_GET['pregunta6a']))
		$pregunta6a=$_GET['pregunta6a'];
		if(isset($_GET['pregunta6b']))
		$pregunta6b=$_GET['pregunta6b'];
		if(isset($_GET['pregunta6c']))
		$pregunta6c=$_GET['pregunta6c'];
		if(isset($_GET['pregunta6d']))
		$pregunta6d=$_GET['pregunta6d'];
		if(isset($_GET['pregunta6e']))
		$pregunta6e=$_GET['pregunta6e'];
	
		if(isset($_GET['pregunta7']))
		$pregunta7=$_GET['pregunta7'];
		if(isset($_GET['pregunta8']))
		$pregunta8=$_GET['pregunta8'];
		if(isset($_GET['pregunta8a']))
		$pregunta8a=$_GET['pregunta8a'];
		if(isset($_GET['pregunta8b']))
		$pregunta8b=$_GET['pregunta8b'];
		if(isset($_GET['pregunta8c']))
		$pregunta8c=$_GET['pregunta8c'];
		if(isset($_GET['pregunta8d']))
		$pregunta8d=$_GET['pregunta8d'];
		if(isset($_GET['pregunta8e']))
		$pregunta8e=$_GET['pregunta8e'];
		if(isset($_GET['pregunta9']))
		$pregunta9=$_GET['pregunta9'];
		if(isset($_GET['pregunta10']))
		$pregunta10=$_GET['pregunta10'];

		if ($pregunta1==null)
			$pregunta1="a";
		if ($pregunta2==null)
			$pregunta2='a';
		if ($pregunta3==null)
			$pregunta3='a';		
		$suma=0;
		
		if ($pregunta1 == 'b')
			$suma++;
		if ($pregunta2 == 'b')
			$suma++;
		if ($pregunta3 == 'b')
			$suma++;

		
		$resulpregunta4=0;
		if ($pregunta4a == 'b')
			$resulpregunta4=$resulpregunta4+0.5;		
		if ($pregunta4b == 'b')
			$resulpregunta4=$resulpregunta4+0.5;		
		if ($pregunta4c == 'b')
			$resulpregunta4=$resulpregunta4-0.7;		
		if ($pregunta4d == 'b')
			$resulpregunta4=$resulpregunta4-0.7;			
		if ($resulpregunta4<0)
			$resulpregunta4=0;
		$suma=$suma+$resulpregunta4;
		
		if ($pregunta5 == 'b')
			$suma++;
		
		$resulpregunta6=0;
		if ($pregunta6a == 'b')
			$resulpregunta6=$resulpregunta6-0.3;		
		if ($pregunta6b == 'b')
			$resulpregunta6=$resulpregunta6-0.3;		
		if ($pregunta6c == 'b')
			$resulpregunta6=$resulpregunta6+1;		
		if ($pregunta6d == 'b')
			$resulpregunta6=$resulpregunta6-0.3;		
		if ($pregunta6e == 'b')
			$resulpregunta6=$resulpregunta6-0.3;	
		if ($resulpregunta6<0)
			$resulpregunta6=0;
		$suma=$suma+$resulpregunta6;
		
		if ($pregunta7 == 'b')
			$suma++;

		$resulpregunta8=0;
		if ($pregunta8a == 'b')
			$resulpregunta8=$resulpregunta8+0.2;		
		if ($pregunta8b == 'b')
			$resulpregunta8=$resulpregunta8+0.2;		
		if ($pregunta8c == 'b')
			$resulpregunta8=$resulpregunta8+0.2;		
		if ($pregunta8d == 'b')
			$resulpregunta8=$resulpregunta8+0.2;		
		if ($pregunta8e == 'b')
			$resulpregunta8=$resulpregunta8+0.2;
		if ($pregunta8 == 'b')
			$resulpregunta8=$resulpregunta8-0.5;		
		if ($resulpregunta8<0)
			$resulpregunta8=0;
		$suma=$suma+$resulpregunta8;	
		
		if ($pregunta9 == 'b')
			$suma++;
		if ($pregunta10 == 'b')
			$suma++;
		echo "La nota es <b>", $suma, "</b> sobre 10";
		
		
		
        ?>
		
        <br><br><br><br><br>
		<form action="test.html">
		<input type="submit" value="Hacer de nuevo el test">
		</form>

  </body>
</html>