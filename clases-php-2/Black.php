<?php

class Black extends Cuenta
{
    public function debitar($monto,$cajero)
    {
        $this->setBalance($this->getBalance() - $monto);
        $this->fechaUltimoMovimiento = date("Y-m-d"); 
    }
    public function acreditar($monto)
    {
        ($monto<1000000) ? parent:: acreditar($monto) :  $this->setBalance(parent:: acreditar($monto)- $monto*0.04);
    }
    public function __construct($cbu)
    {
        parent:: __construct($cbu);
        $this->setTipoCuenta("Black");
    }
}