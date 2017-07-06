<?php
?>
<?php
        include_once('../DataBase/ConnectionDB.php');
        session_start();
        $mat= $_SESSION['mat'];
         $con = DBConnection::open();
        $sql = "SELECT * FROM orientando where matori='$mat'";
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
  <form name ="signup" method="POST" action="editando.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome"value=<?php echo $dado["nomori"]; ?>>
    </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha"value=<?php echo $dado["senhaori"]; ?>>
      </div>
     <div class="form-group">
      <label for="curso">Curso:</label>
      <input type="text" class="form-control" id="curso" name="curso"value=<?php echo $dado["curori"]; ?>>
    </div>
          <div class="form-group">
      <label for="matricula">Matricula:</label>
      <input type="number" class="form-control" id="matricula" name="matricula" readonly value=<?php echo $dado["matori"]; ?>>
    </div>
  <?php }?>

    <button type="submit" class="btn btn-default" name="submit">Editar</button>
  </form>
</div>
</body>
</html>