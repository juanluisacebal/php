<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
                $minima=10;
                $maxima=0;
		$media=0;
	        //$asignatura = new SplFixedArray(7);
                for ($i=0; $i<7; $i++) {
		$asignatura []= rand(0,10);
                //$i= rand (0, 10);
                }
                foreach ( $asignatura as $i){
       
		echo "<br>Nota: ", $i;
                $media=$media+ $i;
                if ($i > $maxima)
                    $maxima= $i;
                if ($i < $minima)
                    $minima= $i;
                }
               // echo "<br>", $media;
                //echo "<br>", $media/7;
                $media = round ($media/ 7, 2); 
         
                
                
                echo "<br> <br>La nota máxima es: ", $maxima, "<br>La nota mínima es ", $minima,"<br>La nota media es ", $media;
                
                //$modulos= new $asignatura;
                
                //foreach ($asignatura as $i){
                //echo "YO:", $asignatura[0];
                $modulos=array ( "PlanificacionRedes" => $asignatura[0],
                         "BasesDeDatos" => $asignatura[1] ,
                         "FundamentosHardware" => $asignatura[2],
                         "LenguajesMarcas" =>   $asignatura[3],
                         "FOL" => $asignatura[4],
                         "ServiciosDeRed" => $asignatura[5],
                          "ImplantacionAplicaciones" =>  $asignatura[6]);
                echo "<b> <br><br> PARTE 2: </b>";
                foreach ( $modulos as $i)
                {
                    echo "<br>",$i;
                }
                //echo $modulos['PlanificacionRedes'];
		
                
                
                
                
		?>
        </body>
</html>