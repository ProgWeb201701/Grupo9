
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
  <h2>Gerenciador de TCC's</h2>
  <form name ="login" method="POST" action="autenticar.php">
    <div class="form-group">
      <label for="mat">Matrícula:</label>
      <input type="number" class="form-control" id="mat" name="mat">
    </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>
    

    <button type="submit" class="btn btn-default" name="entrar">Entrar</button>
    <button type="" class="btn btn-default" name="cancelar">Cancelar</button>

  </form>
  <br>
      <button type="" class="btn btn-default" name="cadastro">Cadastrar-se Aluno</button>
      <button type="" class="btn btn-default" name="cadastro">Cadastrar-se Professor</button>
</div>

</body> 
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

