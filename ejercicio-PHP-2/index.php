<?php 

echo "Ejercicio 1 <br><br>";

for($i=1; $i <=10 ;$i++){
 echo ($i * 2). "<br>";
}

echo "<br><br> Ejercicio 2 <br><br>";
$i = 100;
while($i >= 85){
    echo $i . "<br>";
    $i--;
}

echo "<br><br> Ejercicio 3 <br><br>";

$contador = 1;

while($contador <= 5){
    echo ($contador *2) . "<br>";
    $contador++;
}

echo "<br><br> Ejercicio 4 <br><br>";

$cont = 0;
$i = 0;

while($cont <= 5){
    $moneda = rand(0,1);
    if($moneda == 1){
        $cont++;
    }
    $i++;
}
echo "La cantidad de veces que se tiro la moneda para que salga 5 veces cara es: $i";

echo "<br><br> Ejercicio 5 <br><br>";

$arreglo = ["Pedro","Juan","Ariel","Diego","Leonel"];

for($i=0; $i< count($arreglo); $i++)
{
    echo $arreglo[$i]. "<br>";
}
$i=0;
while($i < count($arreglo))
{
 echo $arreglo[$i]. "<br>";   
 $i++;
}
$i=0;
do
{
 echo $arreglo[$i]. "<br>";   
 $i++;
} while($i < count($arreglo));

foreach($arreglo as $valor)
{
    echo $valor. "<br>";   
}
echo "<br><br> Ejercicio 6 <br><br>";

for($i=0; $i<10;$i++){
$array[$i] = rand(0,10);
}
$i=0;
while($i<count($array)){
    if($array[$i]==5)
    {
        break;
    }
    echo $array[$i] . "<br>";
    $i++;
}
if($i!=10)
{
  echo "El numero era un 5";
}
echo "<br><br> Ejercicio 7 <br><br>";
for($i=0; $i<10;$i++){
    $array[$i] = rand(0,100);
    }
$cont =0;

for($i=0;$i<count($array);$i++)
{
    if($array[$i] % 2==0)
    {
        $cont++;
    }
}
echo "La cantidad de pares es: $cont";

echo "<br><br> Ejercicio 8 <br><br>";

$mascota = [
    "animal" => "perro",
    "edad"  => "5",
    "altura" => "30",
    "nombre" => "nacho"
];

foreach($mascota as $indice => $valor){
    echo "$indice: $valor <br>";
}


echo "<br><br> Ejercicio 9 <br><br>";

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw");
foreach($ceu as $indice => $valor){
    echo "$indice: $valor <br>";
}       
echo "<br><br> Ejercicio 10 <br><br>";

$ceu2 = [

    "Argentina"=> ["ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
                   "esAmericano" => true ],

    "Brasil" => ["ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
                 "esAmericano" => true],

    "Colombia" => ["ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
                    "esAmericano" => true],

    "Francia" => ["ciudades" => ["Paris", "Nantes", "Lyon"],
                    "esAmericano" => false],

    "Italia" => ["ciudades" => ["Roma", "Milan", "Venecia"],
                    "esAmericano" => false],

    "Alemania" => ["ciudades" => ["Munich", "Berlin", "Frankfurt"],
                   "esAmericano" => false]
];

foreach($ceu2 as $indice => $valor){
       if($valor["esAmericano"])
       {
        echo "La ciudades de $indice son: <br>";
           foreach($valor["ciudades"] as $valor2)
           {
               echo $valor2. "<br>";
           }
       }
}
