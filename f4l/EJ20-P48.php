<?php

function generaArrayInt($n, $min, $max)
{
    for ($i = 0; $i < $n ; $i++ ){
          $miarray[$i]=  rand($min, $max);
    }
  
         return $miarray;
}

function minimoArrayInt($miarray)
{
    $num=9999999999999999999999999999999999999999999999999999;
    $i=0;
    foreach ($miarray as $yo)
    {
        $i++;
        if ($yo <= $num){
            $num=$yo;
            $linea=$i;
        }
    }
    $devuelve[0]=$num;
    $devuelve[1]=$linea;
    return $devuelve;
}
        
       
function maximoArrayInt($miarray)
{
    $num=-9999999999999999999999999999999999999999999999999999;
    $i=0;
    foreach ($miarray as $yo)
    {
        $i++;
        if ($yo >= $num){
            $num=$yo;
            $linea=$i;
        }
    }
    $devuelve[0]=$num;
    $devuelve[1]=$linea;
    return $devuelve;
}
        