<?php 

class Pyme extends Cliente implements Liquidable, Imprimible {
    private $cuit;
    private $razonSocial;

    
    public function getCuit()
    {
        return $this->cuit;
    }

  
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }
    public function __construct($cuit,$razonSocial,$email,$pass,$cuenta){
        parent::__construct($email,$pass,$cuenta);
        $this->cuit = $cuit;
        $this->razonSocial = $razonSocial;
      } 
      public function liquidarHaberes(Persona $persona,float $monto)
      {
          $persona->getCuenta()->setBalance($persona->getCuenta()->getBalance() + $monto - $monto*0.01);
          $this->cuenta->setBalance($this->cuenta->getBalance()- $monto + $monto*0.01);
      }
      public function mostrar()
      {
        return $this->getRazonSocial();
      }
}

