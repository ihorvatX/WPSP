<?php

function LoadUsers()
{
    $string = file_get_contents("users.json");
    $oUsers = json_decode($string, true);
    return $oUsers;
}
    
    

function CheckUser($sUsername, $sPassword) 
{
    $bUserExists = false;
    $oUsers = LoadUsers();

    $oUserExits= [];
    $oUserExits['user_id'] = null;
    $oUserExits['username'] = null;

    foreach($oUsers as $oUser)
    {
        if($oUser['username'] == $sUsername && $oUser['password'] == $sPassword)
        {
            $oUserExits['user_id'] = $oUser['user_id'];
            $oUserExits['username'] = $oUser['username'];
            return $oUserExits;
            break;
        }
        else
        {
            return $oUserExits;
            break;
        }
    }
}

function SetSessions($oUser)
{
    $_SESSION['user_id'] = $oUser['user_id'];
    $_SESSION['username'] = $oUser['username'];
}

?>