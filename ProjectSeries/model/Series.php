<?php

class Series
{
    private $name_series;
    private $initials;
    private $category;
    private $year_series;
    private $director;

    public function __construct($name_series,$initials, $category, $year_series, $director)
    {
        $this->name_series = $name_series;
        $this->initials = $initials;
        $this->category = $category;
        $this->year_series = $year_series;
        $this->director = $director;
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

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setYearSeries($year_series)
    {
        $this->year_series = $year_series;
    }

    public function getYearSeries()
    {
       return $this->year_series;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }

    public function getDirector()
    {
        return $this->director;
    }
}