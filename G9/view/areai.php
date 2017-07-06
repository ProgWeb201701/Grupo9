<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

 <form name ="areai" method="POST" action="eareai.php">
    <div class="form-group">
      <label for="nome">Áreas de interesse:</label>
      <select name="ai" id="ai" class="form-control">
          <option name="ai" id="ai" value="BancoDeDados">Banco de Dados</option>
          <option name="ai" id="ai" value="Teste">Teste</option>
          <option name="ai" id="ai" value="Padroes">Padrões</option>
      </select><br>
          <button type="submit" class="btn btn-default" name="submit">Submeter</button>
  </form>
      </select>
    </div>
</body>
</html>
