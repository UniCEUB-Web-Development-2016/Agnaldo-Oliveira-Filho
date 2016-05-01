<?php

class Lista
{
    private $series_name;
    private $season;
    private $episode;
    private $location;

    public function __construct($series_name, $season, $episode, $location)
    {
        $this->series_name = $series_name;
        $this->season = $season;
        $this->episode = $episode;
        $this->location = $location;
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

    public function getEpisode()
    {
        return $this->episode;
    }

    public function setEpisode($episode)
    {
        $this->episode = $episode;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }



}