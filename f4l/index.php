<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'EJ20-P48.php';
        
        $miarr= generaArrayInt(9,20,900000000);
        $i=0;
        foreach ($miarr as $yo)
        {
            $i++;
            echo "<br>Linea ", $i," ---- ",$yo;
            
        }
        
        $minnum=minimoArrayInt($miarr);
        echo "<br>El numero mas <b>pequeño</b> es: ", $minnum[0], " en la línea: ", $minnum[1];
        
        $maxnum=  maximoArrayInt($miarr);
        echo "<br>El numero mas <b>grande</b> es: ", $maxnum[0], " en la línea: ", $maxnum[1];
        
        
        ?>
        
    
    </body>
</html>
