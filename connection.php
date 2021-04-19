<?php
include 'classes.php';

$oConnParam = new Configuration("127.0.0.1", "employees", "root","");

try
{
    $oConnection = new PDO("mysql:host=$oConnParam->host;dbname=$oConnParam->dbName", $oConnParam->username, $oConnParam->password);
    echo "Connected to $oConnParam->dbName at $oConnParam->host successfully.";
}
catch (PDOException $pe)
{
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}



?>