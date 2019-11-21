<?php 
var_dump($_POST);
foreach($_POST as $valor => $valor2){
echo "$valor: $valor2 <br>";
};
echo "<pre>";
print_r(getallheaders());
