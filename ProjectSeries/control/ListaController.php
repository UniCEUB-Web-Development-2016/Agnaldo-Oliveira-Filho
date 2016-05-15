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

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

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

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT series_name, season, episode, location FROM lista WHERE ".$crit);

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

    public function remove($request)
    {
        $params = $request->get_params();

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->prepare("DELETE FROM lista WHERE location = ?");

        $result->bindParam(1, $params['location']);

        $result->execute();

        return $result;
    }

}