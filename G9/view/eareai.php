<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
        $mat= $_SESSION['mat'];
include_once('../DataBase/ConnectionDB.php');
$ai =$_POST['ai'];

   
        $con = DBConnection::open();
        $sql = "UPDATE professor SET areai='$ai'  WHERE matprof='$mat'";
if($con->query($sql)){
    echo'Area de interesse modificada';
}else{
    echo $con->error;
}
$con->close();

?>
</body>
</html>
