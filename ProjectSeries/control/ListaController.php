<?php

include_once "model/Request.php";
include_once "model/Lista.php";
include_once "database/DBConnector.php";

class ListaController
{
    public function register($request)
    {
        $params = $request->get_params();
        $lista = new Lista
        ($params["series_name"],
            $params["season"],
            $params["episode"],
            $params["location"]);

        $db = new DatabaseConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($lista));
    }

    private function generateInsertQuery($lista)
    {
        $query =  "INSERT INTO lista (series_name, season, episode, location)
                    VALUES ('".$lista->getSeriesName()."','".
                               $lista->getSeason()."','".
                               $lista->getEpisode()."','".
                               $lista->getLocation()."')";

        return $query;
    }
}