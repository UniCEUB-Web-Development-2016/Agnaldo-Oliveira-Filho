<?php

class DBConnector
{

    private $ip;
    private $dbName;
    private $user;
    private $password;

    public function __construct($ip,$dbName,$dbType,$port,$user,$password)
    {
        $this->ip = $ip;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    public function DBConnect(){
        try
        {
            $conn = new PDO("mysql:host=$this->ip;dbName=$this->dbName",$this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getDbType()
    {
        return $this->dbType;
    }

    public function setDbType($dbType)
    {
        $this->dbType = $dbType;
    }

    public function getDbName()
    {
        return $this->dbName;
    }

    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


}