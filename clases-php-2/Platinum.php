<?php

class Platinum extends Cuenta 
{
    public function debitar($monto,$cajero)
    {
        if($this->getBalance()<5000)
        {
            $this->setBalance($this->getBalance() - $monto - $monto*0.05);
        }  else
        {
            $this->setBalance($this->getBalance() - $monto);
        }
        $this->fechaUltimoMovimiento = date("Y-m-d"); 
    }
    public function __construct($cbu)
    {
        parent:: __construct($cbu);
        $this->setTipoCuenta("Platinum");
    }
}