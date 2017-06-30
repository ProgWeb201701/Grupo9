<html>
    <head>
        <script type="text/javascript">
            function loginsucesso() {
                setTimeout("window.location='homealuno.php'", 5000);
            }
            function loginfalhou() {
                setTimeout("window.location='index.php'", 5000)
            }
            function loginsucesso1() {
                setTimeout("window.location='homeprof.php'", 5000);
            }
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include_once('../DataBase/ConnectionDB.php');
        $senha = $_POST['senha'];
        $mat = $_POST['mat'];

        $con = DBConnection::open();
        $sql = "SELECT * FROM usuarios where mat='$mat' and senha='$senha'";
        $query = $con->query($sql);
        $con->close();
        $resultaluno = $query->num_rows;


       $con = DBConnection::open();
       $sql2 = "SELECT * FROM usuariosprof where mat='$matricula' and senha='$senha'";
       $query2 = $con->query($sql2);
        $con->close();
       $resultprof = $query2->num_rows;
        
        if ($resultaluno > 0) {
            session_start();
            $_SESSION['mat'] = $_POST['mat'];
            $_SESSION['senha'] = $_POST['senha'];
            echo "<center>Logado como aluno!</center>";
            echo "<script>loginsucesso()</script>";
        } else if($resultprof > 0){
            
        }
       else {
            echo"<center>Matrícula ou senha inválidas! Aguarde para tentar novamente!";
            echo"<script>loginfalhou()</script>";
        }
        ?>
    </body>
</html>
