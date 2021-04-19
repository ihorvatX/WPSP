<?php
include 'classes.php';

$oConnParam = new Configuration("127.0.0.1", "employees", "root","");
var_dump($oConnParam);

try
{
 $oConnection = new PDO("mysql:host=$oConnParam->host;dbname=$oConnParam->dbName", $oConnParam->username, $oConnParam->password);
// $oConnection = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "");
 echo "Connected to $oConnParam->dbName at $oConnParam->host successfully.";
}
catch (PDOException $pe)
{
 die("Could not connect to the database $dbname :" . $pe->getMessage());
}



?>