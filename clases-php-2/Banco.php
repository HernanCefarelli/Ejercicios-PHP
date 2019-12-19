<?php

class Banco 
{
    private $razonSocial;
    private $clientes;

    public function getClientes()
    {
        return $this->clientes;
    }
    public function setClientes($clientes)
    {
        $this->clientes = $clientes;

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
    public function __construct($razonSocial,$clientes)
    {
        $this->razonSocial = $razonSocial;
        $this->clientes = $clientes;
    }
}