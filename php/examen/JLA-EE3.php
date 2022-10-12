<html>
	<head>
        <title>Ejercicio 3 resultado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<center>
		<?php
                $ciudad= $_GET['ciudad'];
                $grados= $_GET['grados'];
                if ($grados >=-10 && $grados<=5)
                    echo "Temperatura normal";
                else if ($grados >5 && $grados<=15)
                    echo "Empieza a hacer calor";
                else if ($grados >15 && $grados<=25)
                    echo "Hace un poco de calor";
                else if ($grados >25 )
                    echo "Hora de poner el ventilador";
                if ( $ciudad == "Albacete")
                    echo ", pero aún se aguanta";
                else
                    echo ", me parece helado";
		?>
		</center>
        <form action="JLA-EE3-form.html" method="get"> 
            <input type="submit" value="Volver">
        </form>
        </body>
</html>