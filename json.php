<?php

include 'connection.php';

if(isset($_GET['json_id']))
{
    switch($_GET['json_id'])
    {
        case "get_all_employees":

            $query = "SELECT * FROM employees";
            $oResult = $oConnection->query($query);
            $rows = array();
            while($oRow = $oResult->fetch(PDO::FETCH_BOTH)) {
                $rows[] = $oRow;
                }
            echo json_encode($rows);
            break;

            case "get_all_departments":
                $query = "SELECT * FROM departments";
                $oResult = $oConnection->query($query);
                $rows = array();
                while($oRow = $oResult->fetch(PDO::FETCH_BOTH)) {
                    $rows[] = $oRow;
                    }
                echo json_encode($rows);
            break;
    }
}



?>