<?php

$funcionesEjecutadas = 0;
include("superficies.php");
include("funciones.php");

function tresRadios($radio1,$radio2,$radio3){

    return mayor(circulo($radio1),circulo($radio2),circulo($radio3));
}
echo "Superficie mayor ".tresRadios(3,4,5). "<br>";
echo "Cantidad de funciones ejecutadas: $funcionesEjecutadas <br><br>";

$cadena = "Me encanta php, a mi también me encanta php!";
echo "Esta es la primera aparicion de php en la cadena: ".strpos($cadena, "php")."<br><br>";

