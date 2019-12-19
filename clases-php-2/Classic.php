<?php

class Classic extends Cuenta 
{
    public function debitar($monto,$cajero)
    {
        if($cajero == "Banelco")
        {
            $this->setBalance($this->getBalance() - $monto - $monto*0.05);
        } else if($cajero == "Link")
        {
            $this->setBalance($this->getBalance() - $monto - $monto*0.10);
        } else 
        {
            $this->setBalance($this->getBalance() - $monto);
        }
        $this->fechaUltimoMovimiento = date("Y-m-d"); 
    }

    public function acreditar($monto)
    {
        $this->setBalance(parent:: acreditar($monto)- $monto*0.05);
    }
    public function __construct($cbu)
    {
        parent:: __construct($cbu);
        $this->setTipoCuenta("Classic");
    }
}