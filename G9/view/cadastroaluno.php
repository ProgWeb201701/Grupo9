<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastrar Aluno</h2>
  <form name ="signup" method="POST" action="cadastrando.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>
     <div class="form-group">
      <label for="curso">Curso:</label>
      <input type="text" class="form-control" id="curso" name="curso">
    </div>
          <div class="form-group">
      <label for="matricula">Matricula:</label>
      <input type="number" class="form-control" id="matricula" name="matricula">
    </div>

    <button type="submit" class="btn btn-default" name="submit">Cadastrar</button>
  </form>
</div>

</body> 
</html>
