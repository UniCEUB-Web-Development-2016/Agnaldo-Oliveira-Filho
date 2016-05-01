<?php

class Episode
{
    private $series_name;
    private $season;

    public function __construct($series_name, $season)
    {
        $this->series_name = $series_name;
        $this->season = $season;
    }

    public function getSeriesName()
    {
        return $this->series_name;
    }

    public function setSeriesName($series_name)
    {
        $this->series_name = $series_name;
    }

    public function getSeason()
    {
        return $this->season;
    }

    public function setSeason($season)
    {
        $this->season = $season;
    }


}

