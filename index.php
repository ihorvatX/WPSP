<?php
include 'connection.php';

$query = "SELECT * FROM employees";

ini_set('memory_limit', '2048M');

$oResult = $oConnection->query($query);


?>
<!DOCTYPE html>
<html>
<body>

<h2>Basic HTML Table</h2>

<table style="width:100%">
  <tr>
    <th>Rbr.</th>
    <th>Id</th> 
    <th>Birth Date</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Hire Date</th>
  </tr>
  <?php

$count = 1;

while($oRow = $oResult->fetch(PDO::FETCH_BOTH))
{
    echo "<tr>";
    echo "<td>".$count++."</td> <td>".$oRow['emp_no']."</td> <td>".$oRow['birth_date']."</td> <td>".$oRow['first_name']."</td> <td>".$oRow['last_name']."</td> <td>".$oRow['gender']."</td> <td>".$oRow['hire_date'];
    echo "</tr>";
}

 
  ?>
</table>

</body>
</html>

