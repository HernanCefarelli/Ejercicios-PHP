<?php

function mayor(int $num1,int $num2,int $num3)
{
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if($num1>$num2 && $num1>$num3)
    {
        return $num1;
    } else if($num2>$num3)
    {
        return $num2;
    } else 
    {
        return $num3;
    }
}

function tabla($min,$max)
{
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $secuencia =[];
    for($i=$min; $i<=$max; $i++)
    {
        $secuencia[] = $i;
    }
    return $secuencia;
}


function mayor2(int $num1,int $num2,int $num3 = 100)
{
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if($num1>$num2 && $num1>$num3)
    {
        return $num1;
    } else if($num2>$num3)
    {
        return $num2;
    } else 
    {
        return $num3;
    }
}
function tabla2($min,$max = 100)
{
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $secuencia =[];
    for($i=$min; $i<=$max; $i++)
    {
        $secuencia[] = $i;
    }
    return $secuencia;
}
