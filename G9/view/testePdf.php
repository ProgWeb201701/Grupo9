<?php

include_once('..\DataBase\ConnectionDB.php');

$con = DBConnection::open();
$sql = "SELECT `arquivo` FROM `monografia`";
$query = $con->query($sql);
$con->close();



?>

<html>
  
    <iframe width="600" height="780" style="border: none;"><?php echo $dado["arquivo"]?></iframe>
</html>