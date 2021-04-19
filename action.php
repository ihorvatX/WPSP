<?php

if(isset($_POST['action_id']))
{

    switch($_POST['action_id'])
    {
        case "AddEmployee":

            // $_POST['empId'];
            // $_POST['empBirthDate'];
            // $_POST['empFirstName'];
            // $_POST['empLastName'];
            // $_POST['empGender'];
            // $_POST['empHireDate'];


            $sQuery = "INSERT INTO employees (birth_date, first_name, last_name, gender,
            hire_date) VALUES (:birthDate, :firstName, :lastName, :gender, :hireDate)";
            $oStatement = $oConnection->prepare($sQuery);
                
            $oData = array(
            'birthDate' => $_POST['empBirthDate'],
            'firstName' => $_POST['empFirstName'],
            'lastName' => $_POST['empLastName'],
            'gender' => $_POST['empGender'],
            'hireDate' =>  $_POST['empHireDate']
            );
            $oStatement->execute($oData);
        break;

        case "UpdateEmployee":

                $sQuery = "UPDATE employees 
                SET birth_date = :birthDate, first_name = :firstName, last_name = :lastName, gender = :gender,
                hire_date = :hireDate WHERE emp_no = :Id ";
                $oStatement = $oConnection->prepare($sQuery);
                    
                $oData = array(
                'Id' => $_POST['empId'],
                'birthDate' => $_POST['empBirthDate'],
                'firstName' => $_POST['empFirstName'],
                'lastName' => $_POST['empLastName'],
                'gender' => $_POST['empGender'],
                'hireDate' =>  $_POST['empHireDate']
                );

                $oStatement->execute($oData);

        break;


        case "DeleteEmployee":

            $sQuery = "DELETE FROM employees WHERE emp_no = :Id ";
            $oStatement = $oConnection->prepare($sQuery);
            $oData = array(
                'Id' => $_POST['empId']
            );
            $oStatement->execute($oData);
        break;
    }


}



?>