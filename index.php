<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div style="width: 500px">
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <button type="submit">Login</button>
  </div>

 
</form>
</div>
</body>
</html>

<?php
include 'functions.php';

session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $exists = CheckUser($_POST['username'], $_POST['password']);

        if($exists['username'] != NULL || $exists["user_id"] != NULL)
        {
            SetSessions($exists);
            header("Location: users.php");
        }
        else
        {
            echo "Korisnik ne postoji";
        }
    }

}


?>