<?php 
$nombre = "Hernan";
$ganaste = rand(0,1);
$array = [
  "Google"=>"https://google.com", 
  "Facebook"=> "https://facebook.com",
 "Twitter" => "https://twitter.com"];
 $array2 = [

 ]
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?=$nombre?></h2>
    <h3>¿Es usted un ganador?
       <?php if($ganaste==1) {
         echo "Si";
       } else 
       {
        echo "NO";
       }
       ?>
    </h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
    <?php foreach($array as $indice => $valor) : ?>
        <li>
            <a href=<?php echo $valor ?>>
             <?=$indice ?>
          </a>
          <?php endforeach ; ?>
        </li>

      
    
    </ul>
  </body>
</html>