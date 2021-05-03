<?php

class Configuration 
{
    public $host = "";
    public $dbName ="";
    public $username = "";
    public $password = "''";

    public function __construct($host, $dbName, $username, $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
    }
    
}


$oConnParam = new Configuration("localhost", "studentskidom", "root", "");

try
{
    $oConnection = new PDO("mysql:host=$oConnParam->host;dbname=$oConnParam->dbName", $oConnParam->username, $oConnParam->password);
    //  echo "Connected to $oConnParam->dbName at $oConnParam->host successfully.";
}
catch (PDOException $pe)
{
    die("Could not connect to the database $oConnParam->dbname :" . $pe->getMessage());
}



?>