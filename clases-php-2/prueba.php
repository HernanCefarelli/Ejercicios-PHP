<?php
include("vendor/autoload.php");
$p = new Persona("Hernan","Cefarelli","1234567","1996/01/18","hernancefarelli@gmail.com", password_hash("hernan",PASSWORD_DEFAULT), new Gold(123456789));

$pyme = new Pyme("20-123456-7","Pyme","pyme@gmail.com", password_hash("pyme",PASSWORD_DEFAULT),new Black(147852369));

$multi = new Pyme("20-6541230-7","Multi","multi@gmail.com", password_hash("multi",PASSWORD_DEFAULT),new Platinum(369852147));

$clientes= [$p,$pyme,$multi];

$banco = new Banco("Credicoop", $clientes);
echo "<pre>";

$p->getCuenta()->acreditar(24000);

echo $p->mostrar()." Balance: ".$p->getCuenta()->getBalance()."<br>";

$p->getCuenta()->debitar(20000, "Banelco");

echo $p->mostrar()." Balance: ".$p->getCuenta()->getBalance()."<br>";

$p->cobrar();

echo $p->mostrar()." Balance: ".$p->getCuenta()->getBalance()."<br>";

$pyme->getCuenta()->acreditar(24000);

$pyme->liquidarHaberes($p,15000);

echo $p->mostrar()." Balance: ".$p->getCuenta()->getBalance()."<br>";

echo $pyme->mostrar()." Balance: ".$pyme->getCuenta()->getBalance()."<br>";