<?php

class Empleado 
{
    private $nombre;
    private $salarioBase;
    private $salarioPension;    

    public function __construct($nombre, $salarioBase)
    {
        $this->nombre = $nombre;
        $this->salarioBase = $salarioBase;
        $this->salarioPension = 0;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function setNombre($nombre) 
    {
        $this->nombre = $nombre;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioPension()
    {
        return $this->salarioPension;
    }

    public function setSalarioPension($salarioPension)
    {
        $this->salarioPension = $salarioPension;
    }

    public function calcularCotizacionTotal() {
        
        return $this->salarioPension = $this->salarioBase * 0.15;
    }

    public function calcularAhorroPensional() {        
        return $this->salarioBase * 0.105;
    }

    public function calcularSeguroInvalidez() {
        return $this->salarioBase * 0.016;
    }

    public function calcularComisionAdministracion() {
        return $this->salarioBase * 0.014;
    }

    public function calcularGarantiaPensionMinima() {
        return $this->salarioBase * 0.015;
    }
}
