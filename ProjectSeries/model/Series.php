<?php

class series
{
    private $idt_serie;
    private $cod_categoria;
    private $name_series;
    private $initials;
    private $year_series;
    private $resumo;

    public function __construct($idt_serie, $cod_categoria,$name_series, $initials, $year_series, $resumo)
    {
        $this->idt_serie = $idt_serie;
        $this->cod_categoria = $cod_categoria;
        $this->name_series = $name_series;
        $this->initials = $initials;
        $this->year_series = $year_series;
        $this->resumo = $resumo;
    }

    public function getIdtSerie()
    {
        return $this->idt_serie;
    }

    public function setIdtSerie($idt_serie)
    {
        $this->idt_serie = $idt_serie;
    }

    public function getCodCategoria()
    {
        return $this->cod_categoria;
    }

    public function setCodCategoria($cod_categoria)
    {
        $this->cod_categoria = $cod_categoria;
    }

    public function setNameSeries($name_series)
    {
        $this->name_series = $name_series;
    }

    public function getNameSeries()
    {
        return $this->name_series;
    }

    public function getInitials()
    {
        return $this->initials;
    }

    public function setInitials($initials)
    {
        $this->initials = $initials;
    }

    public function setYearSeries($year_series)
    {
        $this->year_series = $year_series;
    }

    public function getYearSeries()
    {
        return $this->year_series;
    }

    public function setResumo($resumo)
    {
        $this->resumo = $resumo;
    }

    public function getResumo()
    {
        return $this->resumo;
    }
}


