<?php

class Series
{
    private $name;
    private $category;
    private $year;
    private $director;

    public function __construct($name, $category, $year, $director)
    {
        $this->setName($name);
        $this->setCategory($category);
        $this->setYear($year);
        $this->setDirector($director);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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