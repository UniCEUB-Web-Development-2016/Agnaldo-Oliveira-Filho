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
}