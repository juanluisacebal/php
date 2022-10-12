<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
        Calcula la media de 3 notas o menos, y dependiendo las notas calcula si es:
		<b>
		<br>0-4.99 -> Necesita Mejorar
		<br>5-5.99 -> Progresa adecuadamente
		<br>6-6.99 -> Bien
		<br>7-8.99 -> Notable
		<br>9-9.99 -> Sobresaliente
		<br>10     -> Matrícula de honor
		</b><br><br>

        <?php
		$nota1=$_GET['nota1'];
		$nota2=$_GET['nota2'];
		$nota3=$_GET['nota3'];
		$notas=3;
		if ( $nota2==null && $nota1!=null && $nota3!=null){
		$suma=($nota1+$nota3);
		$media=$suma/2;
		$notas--;
		}
	    else if ( $nota3==null && $nota1!=null && $nota2!=null){
			$suma=($nota1+$nota2);
			$media=$suma/2;
			$notas--;
			}
		else if ( $nota1==null && $nota2!=null && $nota3!=null){
			$suma=($nota2+$nota3);
			$media=$suma/2;
			$notas--;
			}
		else if ( $nota1==null && $nota2==null && $nota3!=null){
			$suma=$nota3;
			$media=$suma;
			$notas--;
			$notas--;
			}
		else if ( $nota1==null && $nota2!=null && $nota3==null){
			$suma=$nota2;
			$media=$suma;
			$notas--;
			$notas--;
			}
		else if ( $nota1!=null && $nota2==null && $nota3==null){
			$suma=$nota1;
			$media=$suma;
			$notas--;
			$notas--;
			}
		else if ( $nota1==null && $nota2==null && $nota3==null){
			
			$notas=0;
			}			
		else{
			
		$suma=($nota1+$nota2+$nota3);
		$media=$suma/3;
		}
		if ($notas!=0){
		if ($notas!=1)
			echo "La nota media de (";
		if ($nota1!=null){
		echo "<b>";
		echo $nota1;
		echo "</b>";
		if ($nota2!=null || $nota3!=null)
		echo " + ";
		}
		if ($nota2!=null){
	 
		echo "<b>";
		echo $nota2;
		echo "</b>";
		if ($nota3!=null)
		echo " + ";
		}

		if ($nota3!=null){
		echo "<b>";		
		echo $nota3;
		echo "</b>";
		}
		if ($notas!=1)
			echo " ) = <br><br><b>", $suma, "</b> / <b>", $notas," </b>= ";
		else
			echo " entre 1 evidentemente es ";
			echo "<b>";
        echo round($media, $precision = 2);
		echo "<br><br>";
        if ($media<5 && $media>=0)
			$nota=1;
		if ($media<6 && $media>=5)
			$nota=2;
		if ($media<7 && $media>=6)
			$nota=3;
		if ($media<9 && $media>=7)
			$nota=4;
		if ($media<10 && $media>=9)
			$nota=5;
		if ($media==10)
			$nota=6;
        switch ($nota) {
			case 1:
				echo "Necesita mejorar";
				break;      
			case 2: 
				echo  "Progresa adecuadamente";
				break;     
            case 3: 
				echo  "Bien";
				break;       
            case 4: 
				echo  "Notable";
				break;  
            case 5:
				echo  "Sobresaliente";
				break;
			case 6:
				echo  "Matricula de honor";
				break;
          }
		
		}
		switch ($notas){
			case 0:
			echo "Que pena, no introdujiste <b>ninguna</b> nota que calcular<b>!";
			echo "<br><br><br><br> ¿Eso pretendías?";
			break;
			case 1:
			echo "<br><br>";
			case 2:
			echo "   ....&nbsp&nbsp&nbspHay que comprobar el expediente del alumno ya que no está presentandose a todas las materias...";
			echo "y saber el motivo de esa exencción si los hay ";
			break;
		}
		
		echo "</b>";
        ?>
        <br><br><br><br><br>
		<form action="nota.html">
		<input type="submit" value="Calcular mas notas">
		</form>

  </body>
</html>