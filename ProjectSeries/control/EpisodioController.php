<?php

include_once "model/Request.php";
include_once "model/episodio.php";
include_once "database/DBConnector.php";

class EpisodioController
{

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "mydb", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT s.name_series, t.num_temporada, e.nme_episodio, e.duracao, e.dta_lancamento,
        d.nme_diretor, e.sinopse, e.link_trailer FROM episodio AS e, series AS s, temporada AS t, diretor AS d
        WHERE s.idt_serie = t.cod_serie AND t.idt_temporada = e.cod_temporada AND d.idt_diretor = e.cod_diretor AND ".$crit);

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