<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once('../DataBase/ConnectionDB.php');
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$curso=$_POST['curso'];
$matricula=$_POST['matricula'];
   
        $con = DBConnection::open();
        $sql = "select count(matori) from `orientando` where (matori like '$matricula' )";
        $query = $con->query($sql);
        $n = $query->fetch_array();
        $con->close();
       if($n[0] === '0'){
           save($nome, $senha, $matricula, $curso);
           
       }
       else{
           echo'Matrícula já cadastrada';
       }
function save($nome, $senha, $matricula, $curso){
$con = DBConnection::open();
$sql = "INSERT INTO orientando(curori, matori, nomori, senhaori) values('$curso', '$matricula', '$nome', '$senha')";
$sql2 = "INSERT INTO usuarios(mat, senha) values ('$matricula', '$senha')";
if($con->query($sql)){
    $con->query($sql2);
    echo'Cadastrado!';
}else{
    echo $con->error;
}
$con->close();
}
?>
</body>
</html>
