<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
                $ppares=1;
                $simpares=0;
                $sumatorio_suma=0;
                $sumatorio_multi=1;
                 for ($i=1; $i<=100; $i++){
                    $sumatorio_suma=$sumatorio_suma+$i;
                    $sumatorio_multi=$sumatorio_multi*$i;
                    echo "Num: ",$i ," Suma: ",$sumatorio_suma," Sumatorio multiplicacion: ", $sumatorio_multi, "<br>";
                 
                    if ($i%2==0){
			$ppares=$ppares*$i;
                                }
                    if ($i%2!=0){
			$simpares=$simpares+$i;
                        }
                 }  echo "   <br>  <br>  <b>";
                    echo "La multiplicacion de pares es: ", $ppares;
                    echo "<br>La suma de los impares es: ", $simpares, "</b>";
                    echo "<br><br><br>"
                  
		?>
        </body>
</html>