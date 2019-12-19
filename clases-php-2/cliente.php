<?php

//Defino variables privadas para la clase Cliente

abstract Class Cliente{
  protected $email;
  protected $pass;
  protected $cuenta;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email,$pass,$cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado
  
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }
  
  public function getCuenta()
  {
    return $this->cuenta;
  }

  public function setCuenta($cuenta)
  {
    $this->cuenta = $cuenta;

    return $this;
  }
  public function cobrar()
      {
        if($this->cuenta->getTipoCuenta()=="Classic")
        {
          $this->cuenta->setBalance($this->cuenta->getBalance() - 100);
        } else if($this->cuenta->getTipoCuenta()=="Gold")
        {
            if($this instanceof Persona)
            {
                $this->cuenta->setBalance($this->cuenta->getBalance()-strlen($this->getApellido())*10);
            } else 
            {
                $this->cuenta->setBalance($this->cuenta->getBalance()-strlen($this->getRazonSocial())*5);
            }
         
        }else if($this->cuenta->getTipoCuenta()=="Platinum")
        {
            $this->cuenta->setBalance($this->cuenta->getBalance() - $this->cuenta->getBalance()*0.10);
        } else 
        {
          $this->cuenta->setBalance($this->cuenta->getBalance() - 500 - 100*date('l', strtotime($this->cuenta->getFechaUltimoMovimiento())));
        }
      }
  }
