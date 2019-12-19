<?php

abstract class Cuenta implements Imprimible
{
    protected $cbu;
    protected $balance = 0;
    protected $fechaUltimoMovimiento;
    protected $tipoCuenta;
    
    public function getCbu()
    {
        return $this->cbu;
    }
    public function setCbu($cbu)
    {
        $this->cbu = $cbu;

        return $this;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
    public function getFechaUltimoMovimiento()
    {
        return $this->fechaUltimoMovimiento;
    }
    public function setFechaUltimoMovimiento($fechaUltimoMovimiento)
    {
        $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;

        return $this;
    }
    public function __construct($cbu)
    {
      $this->cbu = $cbu;
    }
    public abstract function debitar($monto,$cajero);
    public function acreditar($monto)
    {
        $this->balance +=$monto;
        $this->fechaUltimoMovimiento = date("Y-m-d"); 
        return $this->balance;
    }
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }
      public function mostrar(){
        return $this->getBalance();
    }
}