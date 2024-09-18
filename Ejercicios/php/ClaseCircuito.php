<?php

class Circuito {
    //Definiendo los atributos de mi clase Circuito 
    private $voltaje;
    private $resistencias;

    //Inicializando mis atributos con mi metodo constructor

    public function __construct($voltaje, $resistencias) {
        $this->voltaje = $voltaje;
        $this->resistencias = $resistencias;
    }

    public function calcularResistenciaTotal() {
        $sumaInversas = 0;
        foreach ($this->resistencias as $resistencia) {
            $sumaInversas += 1 / $resistencia;
        }
        return 1 / $sumaInversas;
    }

    public function calcularCorriente() {
        $resistenciaTotal = $this->calcularResistenciaTotal();
        return $this->voltaje / $resistenciaTotal;
    }

    public function calcularPotencia() {
        $resistenciaTotal = $this->calcularResistenciaTotal();
        return pow($this->voltaje, 2) / $resistenciaTotal;
    }
}