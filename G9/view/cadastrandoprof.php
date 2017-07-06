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
$inst=$_POST['inst'];
$tit=$_POST['tit'];
$mat=$_POST['mat'];

   $con = DBConnection::open();
        $sql = "select count(matori) from `orientando` where (matori like '$mat' )";
        $query = $con->query($sql);
        $n = $query->fetch_array();
        $con->close();
        
        $con = DBConnection::open();
        $sql2 = "select count(matprof) from `professor` where (matprof like '$mat' )";
        $query2 = $con->query($sql2);
        $n2 = $query2->fetch_array();
        $con->close();
       if($n[0] ==='0' && $n2[0] === '0'){
           save($nome, $senha, $mat, $tit, $inst);
           
       }
       else{
           echo'Matrícula já cadastrada';
       }
function save($nome, $senha, $mat, $tit, $inst){
$con = DBConnection::open();
$sql = "INSERT INTO professor(nomprof, titprof, instprof, senhaprof, matprof) values('$nome', '$tit', '$inst', '$senha', '$mat')";
if($con->query($sql)){
    echo'Cadastrado!';
}else{
    echo $con->error;
}
$con->close();
}

?>
</body>
</html>
