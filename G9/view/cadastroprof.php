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
  <form name ="signup" method="POST" action="cadastrandoprof.php">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
          <div class="form-group">
      <label for="mat">Matricula:</label>
      <input type="number" class="form-control" id="mat" name="mat">
    </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>
     <div class="form-group">
      <label for="curso">Titulação:</label>
      <input type="text" class="form-control" id="tit" name="tit">
    </div>
          <div class="form-group">
      <label for="inst">Instituição:</label>
      <input type="text" class="form-control" id="inst" name="inst">
    </div>

    <button type="submit" class="btn btn-default" name="submit">Cadastrar</button>
  </form>
</div>

</body> 
</html>
