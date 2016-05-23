<?php

include_once "model/Request.php";
include_once "model/series.php";
include_once "database/DBConnector.php";

class SeriesController
{

    public function search($request)
    {
        $params = $request->get_params();

        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT * FROM series WHERE 1=1 AND ".$crit);

       return print_r($result->fetchAll(PDO::FETCH_ASSOC));



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