<?php

class Series
{
    private $name;
    private $initials;
    private $category;
    private $year;
    private $director;

    public function __construct($name,$initials, $category, $year, $director)
    {
        $this->name = $name;
        $this->initials = $initials;
        $this->category = $category;
        $this->year = $year;
        $this->director = $director;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
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