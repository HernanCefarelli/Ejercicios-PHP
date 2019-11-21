<?php
    $js_usuarios = file_get_contents("usuarios.json");
    $usuarios = json_decode($js_usuarios,true);
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
     <?php foreach($usuarios as $usuario) : ?>
         <a href="perfil.php?email=<?=$usuario["email"] ?>"> 
            <?=$usuario["nombre"] ?> 
            <br> 
        </a>
         <?php endforeach ; ?>
</body>
</html>