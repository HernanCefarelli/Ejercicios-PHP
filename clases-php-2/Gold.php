<?php

class Gold extends Cuenta 
{
    public function debitar($monto,$cajero)
    {
        if($cajero == "Banelco")
        {
            $this->setBalance($this->getBalance() - $monto);
        } else if($cajero == "Link")
        {
            $this->setBalance($this->getBalance() - $monto - $monto*0.05);
        } else 
        {
            $this->setBalance($this->getBalance() - $monto);
        }
        $this->fechaUltimoMovimiento = date("Y-m-d"); 
    }
    public function acreditar($monto)
    {
        ($monto>=25000) ? parent:: acreditar($monto) :  $this->setBalance(parent:: acreditar($monto)- $monto*0.03);
        
    }
    public function __construct($cbu)
    {
        parent:: __construct($cbu);
        $this->setTipoCuenta("Gold");
    }
}