<?php
/* Ejercicio 1 */
$persona = [
    "Nombre" => "Jon",
    "Apellido" => "Snow",
    "Edad" => 27,
    "Hobbies" => ["Netflix", "Futbol" , "Programar"]
];

$persona ["Edad"] = 25;

$persona["Direccion"] = "Winterfell";


$persona ["Hobbies"][] = "Nadar";

foreach($persona as $dir=>$valor)
{
    if($dir == "Hobbies")
    {
        foreach($valor as $valor2)
        {
            echo $dir.": ".$valor2;
            echo "<br>";
        }
    } else
    {
        echo $dir.": ".$valor;
        echo "<br>";
    }    
}

echo "<br>--------Ejercicios Condicionales --------  <br> <br>";
echo "--------Ejercicio 1 -------- <br> <br>";
$var1 = 25;
$var2 = 4;
if($var1>$var2)
{
    echo "El numero mayor es $var1";
} else 
{
    echo "El numero mayor es $var2";
}

echo "<br><br>--------Ejercicio 2 -------- <br><br>";
$bandera = rand(1,5);
if($bandera>=3 &&  $bandera<=5)
{
    $final = $bandera;
    echo "El numero aleatorio es: $final";
} else
{
    echo "Numero no esta entre 3 y 5";
}

echo "<br><br>--------Ejercicio 3 -------- <br> <br>";
if(isset($final))
{
    if($final == 3)
    {
        echo "Es $final";
    } else
    {
        echo "No es $final";
    }

} else 
{
    echo "INDETERMINADO";
}
echo "<br><br>--------Ejercicio 4 -------- <br> <br>";
$valor4 =rand(1,100);
if($valor4 > 50)
{
    echo "El numero es mayor a 50 ";
} else 
{
    echo "El numero es menor a 50 ";
}
echo "<br><br>--------Ejercicio 5 -------- <br> <br>";
$nombreDeUsuario = "admina";
$ContraseniaDeUsuario = 11234;
if($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == 1234)
{
    echo "Bienvenido";
} else if( $nombreDeUsuario != "admin" && $ContraseniaDeUsuario == 1234)
{
    echo "Usuario incorrecto";
} else if($ContraseniaDeUsuario != 1234 && $nombreDeUsuario == "admin")
{
 echo "Contraseña Incorrecta";
} else 
{
    echo "TODO INCORRECTO";
}
echo "<br><br>--------Ejercicio 6 -------- <br> <br>";
echo "Hecho mentalmente";
echo "<br><br>--------Ejercicio 7 -------- <br> <br>";
$cantidadDeAlumnos = 0;
if ($cantidadDeAlumnos) {

    echo "true";
    
    }
    
    else {
    
    echo "false";
    
    }
echo "<br><br>--------Ejercicio 8 -------- <br> <br>";
$numero = rand(1,1000);
echo ($numero % 2) == 0 ?  "$numero es Par" : "$numero es Impar";
echo "<br><br>--------Ejercicio 9 -------- <br> <br>";
$nota = rand(0,10);

/*if ($nota<4) {
    $situacion = "Desaprobado";
} else if($nota >=4 && $nota<=5)
{
    $situacion = "Zafamos";
} else if($nota>=6 && $nota<=8)
{
    $situacion = "Bien";
} else if($nota == 9)
{
    $situacion = "Muy bien";
} else 
{
    $situacion = "Excelente";
}
switch($situacion)
{
    case "Desaprobado": echo $situacion." ".$nota; break;
    case "Zafamos" :  echo $situacion." ".$nota; break;
    case "Bien":  echo $situacion." ".$nota; break;
    case "Muy bien":  echo $situacion." ".$nota; break;
    case "Excelente" : echo $situacion." ".$nota; break;
}*/
switch($nota)
{
    case 0: 
    case 1: 
    case 2: 
    case 3: echo "Desaprobado $nota"; break;
    case 4: 
    case 5: echo "Zafaste $nota"; break;
    case 6: 
    case 7: 
    case 8: echo "Bien $nota"; break;
    case 9: echo "Muy bien $nota"; break;
    case 10: echo "Excelente $nota"; break;
    default: echo "no da";
    
}