<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<title> TCC Aluno </title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-grid.min.css" />
<link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
</head>

<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="?pagina=home">Página Inicial</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="?pagina=alunoedita">Editar Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pagina=operador_ligacoes">Submeter Monografia</a>
      </li>
    </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="../../logout.php">Sair</a>
            </li>
        </ul>
  </div>
</nav>



<div class="container" style="padding-top:50px;">
    <div class="row">
    <div class="col-md-12">
    <?php
        $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "home";
        if($pagina == "home"){
            echo "<div class='row'><div class='col-md-12'><h4>Bem Vindo!</h4></div></div>";
        }else if($pagina == "homealuno"){
            include("homealuno.html");
        }else if($pagina == "operador_ligacoes"){
            include("operador_ligacoes.php");
        }else{
            echo "<div class='row'><div class='col-md-12'><h4>Página não encontrada!</h4></div></div>";
        }
    ?>
    </div>
    </div>
</div>

<script src="../assets/js/jquery-3.1.1.min.js"></script>
<script src="../assets/js/tether.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>   