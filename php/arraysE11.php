<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
        <?php
		$encontrado=1;
		$palabraa = array ( "Mesa" => "Table", "hola" => "Hello");
		if (isset($_GET['palabra'])){
			$unavez=0;
			foreach($palabraa as $prueba){
				if( $prueba== isset($palabraa[$_GET['palabra']])){
					if($unavez==0)
					{
					echo "Respuesta: a ",$_GET['palabra'], " es " ,$palabraa[$_GET['palabra']];
					$unavez=1;
					}
				}
				else
					$encontrado=0;
			}
			$unavez=0;
			if ($encontrado==0){
				echo " Palabra no encontrada ";
				$encontrado=1;
				}
		}
        ?>       
		<form action="arraysE11.php" method="get" value=<?php $palabraa?>>
		<tr><td>
		<input type="text" name="palabra">
		<input type="submit" value="Otra vez">
	
		</td>
		</tr>
		</form>



  </body>
</html>