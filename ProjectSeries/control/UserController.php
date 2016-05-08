<?php

include_once "model/Request.php";
include_once "model/User.php";
include_once "database/DBConnector.php";

class UserController
{
    public function register($request)
    {
        $params = $request->get_params();
        $user = new User
            ($params["firstName"],
            $params["lastName"],
            $params["email"],
            $params["birthDate"],
            $params["city"],
            $params["state"],
            $params["password"]);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();


        return $conn->query($this->generateInsertQuery($user));
    }

    private function generateInsertQuery($user)
    {
        $query =  "INSERT INTO user (firstName, lastName, email, birthDate, city, state, pass) VALUES ('".$user->getFirstName()."','".
            $user->getLastName()."','".
            $user->getEmail()."','".
            $user->getBirthDate()."','".
            $user->getCity()."','".
            $user->getState()."','".
            $user->getPassword()."')";

        return $query;
    }

    public function search($request)
    {
        $params = $request->get_params();
        $crit = $this->generateCriteria($params);

        $db = new DBConnector("localhost", "ProjectSeries", "mysql", "", "root", "");

        $conn = $db->getConnection();

        $result = $conn->query("SELECT firstName, lastName, email, birthDate, city, state FROM user WHERE ".$crit);

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