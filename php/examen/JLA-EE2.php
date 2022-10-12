<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<center>
		<?php
                if (!isset($_GET['a'])) {
                $a = 0;
                }else
                $a= $_GET['a'];
                if (!isset($_GET['b'])) {
                $b = 0;
                }else
                $b= $_GET['b'];
                if ( $a==0 || $b==0 ) {
                    echo "Introduce números: ";
                }
                else {
                 echo "El calculo de (", $a, " * ", $b, ") / 2 es: ", $a*$b/2;
                }
		?>
		</center>
        <form action="JLA-EE2.php" method="get"> 
            Lado mayor <input type="number" name="a" min=0 required step="1" value=1<?php $a?>>>
            Lado menor <input type="number" name="b" min=0 required step="1" value=1<?php $b?>>
           <input type="submit" value="Calcular">
        </form>
        </body>
</html>
        


