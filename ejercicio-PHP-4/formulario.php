
<?php
$nombre ="";
$email ="";
$errores = ["Nombre_vacio", "Email_vacio","Nombre_demasiado_corto"];
$bandera = [false,false,false];

$err = [];
$nombre = isset($_POST["nombre"] ?  $_POST["nombre"] : '';

if($_POST){

    if($nombre == ""){
        $err['nombre'] = "El nombre no esta completado";
    } else {

    }

    if(isset($_POST["nombre"]) && isset($_POST["email"]))
    {
        if(strlen($_POST["nombre"])!=0)
        {
            if(strlen($_POST["nombre"])>=5)
            {
                $nombre = $_POST["nombre"];
            } else 
            {
               $bandera[2] = true;
            }
        } else 
        {
            $bandera[0] = true;
        }
        if(strlen($_POST["email"])!=0)
        {
            $email = $_POST["email"];
        } else 
        {
            $bandera[1] = true;
        }
    }
    if($bandera[0] && $bandera[1])
    {
        $nombre = $errores[0];
        $email = $errores[1]; 
    } else if($bandera[0] && !$bandera[1])
    {
        $nombre = $errores[0];
    } else if(!$bandera[0] && $bandera[1])
    {
        $email = $errores[1]; 
    } else  if($bandera[2] && $bandera[1])
    {
        $nombre = $errores[2];
        $email = $errores[1]; 
    } else if($bandera[2] && !$bandera[1])
    {
        $nombre = $errores[2];
    } else if(!$bandera[2] && $bandera[1])
    {
        $email = $errores[1]; 
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action=<?=$_SERVER['PHP_SELF']?> method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value=<?= $nombre ?>>
        
        <br>
        <label for="email">Email</label>
        <input type="email" name="email"value=<?= $email ?>>
        <br>
       <input type="submit">
    </form>
</body>
</html>
