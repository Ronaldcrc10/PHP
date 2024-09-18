<?php
class ClaseEmpleado2
{
    private $nombre;
    private $horasNormales;
    private $horasExtrasDiurnas;
    private $horasExtrasNocturnas;
    private $valorHoraNormal;

    public function __construct($nombre, $horasNormales, $horasExtrasDiurnas, $horasExtrasNocturnas, $valorHoraNormal)
    {
        $this->nombre = $nombre;
        $this->horasNormales = $horasNormales;
        $this->horasExtrasDiurnas = $horasExtrasDiurnas;
        $this->horasExtrasNocturnas = $horasExtrasNocturnas;
        $this->valorHoraNormal = $valorHoraNormal;
    }

    public function calcularValorHorasNormales()
    {
        return $this->horasNormales * $this->valorHoraNormal;
    }

    public function calcularValorHoraExtraDiurna()
    {
        return $this->valorHoraNormal * 1.25;
    }

    public function calcularValorHoraExtraNocturna()
    {
        return $this->valorHoraNormal * 1.75;
    }

    public function calcularValorHorasExtrasDiurnas()
    {
        return $this->horasExtrasDiurnas * $this->calcularValorHoraExtraDiurna();
    }

    public function calcularValorHorasExtrasNocturnas()
    {
        return $this->horasExtrasNocturnas * $this->calcularValorHoraExtraNocturna();
    }

    public function calcularSueldoBruto()
    {
        return $this->calcularValorHorasNormales() + $this->calcularValorHorasExtrasDiurnas() + $this->calcularValorHorasExtrasNocturnas();
    }

    public function calcularDescuentoHonorarios()
    {
        return $this->calcularSueldoBruto() * 0.10;
    }

    public function calcularValorNeto()
    {
        return $this->calcularSueldoBruto() - $this->calcularDescuentoHonorarios();
    }

    public function getResultados()
    {
        return [
            'nombre' => $this->nombre,
            'valorHorasNormales' => $this->calcularValorHorasNormales(),
            'valorHoraExtraDiurna' => $this->calcularValorHoraExtraDiurna(),
            'valorHoraExtraNocturna' => $this->calcularValorHoraExtraNocturna(),
            'valorHorasExtrasDiurnas' => $this->calcularValorHorasExtrasDiurnas(),
            'valorHorasExtrasNocturnas' => $this->calcularValorHorasExtrasNocturnas(),
            'sueldoBruto' => $this->calcularSueldoBruto(),
            'descuentoHonorarios' => $this->calcularDescuentoHonorarios(),
            'valorNeto' => $this->calcularValorNeto()
        ];
    }
}
?>
