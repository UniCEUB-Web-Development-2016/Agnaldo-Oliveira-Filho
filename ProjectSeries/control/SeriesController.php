<?php

include_once "model/Request.php";
include_once "model/Series.php";
include_once "database/DBConnector.php";

class SeriesController
{
    public function register($request)
    {
        $params = $request->get_params();
        $series = new Series
           ($params["name_series"],
            $params["initials"],
            $params["category"],
            $params["year_series"],
            $params["director"]);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($series));
    }

    private function generateInsertQuery($series)
    {
        $query =  "INSERT INTO series (name_series, initials, category, year_series, director) VALUES
        ('".$series->getNameSeries()."','".
            $series->getInitials()."','".
            $series->getCategory()."','".
            $series->getYearSeries()."','".
            $series->getDirector()."')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT name_series, initials, category, year_series, director FROM series WHERE ".$crit);

        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    private function generateCriteria($params)
    {
        $criteria = "";
        foreach($params as $key => $value)
        {
            $criteria = $criteria.$key." LIKE '%".$value."%' OR ";
        }

        return substr($criteria, 0, -4);
    }
}