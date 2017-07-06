<?php
include_once('../DataBase/ConnectionDB.php');

$con = DBConnection::open();
$sql = "SELECT `matori`, `nomori`, `curori` , `tittcc`, `dtdeftcc`,`nomcoo`,`nomprof` FROM `orientando` JOIN `tcc` JOIN `coordenadortcc` JOIN `professor`";
$query = $con->query($sql);
$con->close();
?>

<html>
    <head> 
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="css/tabhora.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Data TCC</title>
    </head>
    <body>
        <div class="container">
            <div id="table" class="col-md-18">
                <table class="table table-hover table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Titulo do TCC</th>
                            <th>Data de Defesa</th>
                            <th>Orientador</th>
                            <th>Coordenador</th>
                            <th>Avaliador</th>
                            <th>Monografia</th>
                        </tr>
                    </thead>
                    <?php while ($dado = $query->fetch_array()) { ?> <!-- colunas das tabelas armazenadas na variável dado-->
                        <tbody>   
                            <tr>
                                <td><?php echo $dado["matori"]; ?></td>
                                <td><?php echo $dado["nomori"]; ?></td>
                                <td><?php echo $dado["curori"]; ?></td>
                                <td><?php echo $dado["tittcc"]; ?></td>
                                <td><?php echo $dado["dtdeftcc"]; ?></td>
                                <td><?php echo $dado["nomprof"]; ?></td> <!--nome orientador -->
                                <td><?php echo $dado["nomcoo"]; ?></td>
                                <td><?php echo $dado["nomprof"]; ?></td> <!-- nome avaliador -->
                                <td><a href="testePdf">Visualizar</a></td>

                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
</html>