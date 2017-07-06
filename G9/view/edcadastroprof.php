<?php
?>
<?php
        include_once('../DataBase/ConnectionDB.php');
        session_start();
        $mat= $_SESSION['mat'];
         $con = DBConnection::open();
        $sql = "SELECT * FROM professor where matprof='$mat'";
        $query = $con->query($sql);
        ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="container">
  <h2>Editar Aluno</h2>
  <?php while($dado = $query->fetch_array() ){ ?>
  <form name ="signup" method="POST" action="editandoprof.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome"value=<?php echo $dado["nomprof"]; ?>>
    </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha"value=<?php echo $dado["senhaprof"]; ?>>
      </div>
     <div class="form-group">
      <label for="tit">Titulação:</label>
      <input type="text" class="form-control" id="tit" name="tit"value=<?php echo $dado["titprof"]; ?>>
    </div>
     <div class="form-group">
      <label for="inst">Instituição:</label>
      <input type="text" class="form-control" id="inst" name="inst"value=<?php echo $dado["instprof"]; ?>>
    </div>
          <div class="form-group">
      <label for="matricula">Matricula:</label>
      <input type="number" class="form-control" id="matricula" name="matricula" readonly value=<?php echo $dado["matprof"]; ?>>
    </div>
  <?php }?>

    <button type="submit" class="btn btn-default" name="submit">Editar</button>
  </form>
</div>
</body>
</html>