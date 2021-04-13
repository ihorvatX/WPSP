<!DOCTYPE html>
<html>
<body>

<table>
  <tr>
    <th>User_id</th>
    <th>Username</th> 
  </tr>
  
    <?php 
    include 'functions.php';

    session_start();
    $oUsers = LoadUsers();

    foreach($oUsers as $oUser)
    {
     if($oUser['user_id'] == $_SESSION['user_id'])
     {
         echo '<tr style="color:red"> <td>'. $oUser['user_id'] . '</td> 
         <td>'. $oUser['username']. '</td></tr>';
     }
     else
     {
        echo '<tr> <td>'. $oUser['user_id'] . '</td> 
        <td>'. $oUser['username']. '</td></tr>';
     }
    }
    ?>
  
</table>

</body>
</html>