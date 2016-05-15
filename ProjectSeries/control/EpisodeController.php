<?php

include_once "model/Request.php";
include_once "model/Episode.php";
include_once "database/DBConnector.php";

class EpisodeController
{

    public function register($request)
    {
        $params = $request->get_params();
        $episode = new Episode
        ($params["series_name"],
            $params["season"]);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($episode));
    }

    private function generateInsertQuery($episode)
    {
        $query =  "INSERT INTO episode (series_name, season) VALUES
        ('".$episode->getSeriesName()."','".
            $episode->getSeason()."')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT series_name, season FROM episode WHERE ".$crit);

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