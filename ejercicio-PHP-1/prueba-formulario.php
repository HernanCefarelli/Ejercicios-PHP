<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <label for="numero">Numero</label>
    <input type="number" name="numero" required >

    <button name="submit" type="submit" value="enviar" >Enviar</button>
    </form>
</body>
</html>
<?php 
echo'<pre>';
print_r($_SERVER);
if (isset($_POST['numero'])) {
    $nota =$_POST['numero'];
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
        
}

?>