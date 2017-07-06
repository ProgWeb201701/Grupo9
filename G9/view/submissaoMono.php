<?php 

include_once('..\DataBase\ConnectionDB.php');


$con = DBConnection::open();

$msg = false;

if(isset($_FILES['monografia'])){
    $extensao = strtolower(substr($_FILES['monografia']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "..\G9";

  move_uploaded_file($_FILES['monografia']['tmp_name'], $diretorio . $novo_nome);
    $sql = "INSERT INTO monografia (codmono, arquivo, datamono) VALUES (null, '$novo_nome' , NOW())";
    if ($query = $con->query($sql)){
        $msg = "Arquivo enviado com sucesso";
    }
    else{
        $msg = "Falha ao enviar arquivo";
    }
    
    echo $con->error;
    $con->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Submissão de Arquivos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Submissão de Arquivos</h1>
            <?php if($msg != false) echo "<p>$msg</p>"; ?>
            <form action="submissaoMono.php" method="post" enctype="multipart/form-data">
                Arquivo: <input type="file" required name="monografia">
                <input type="submit" value="Submeter">
            </form>
        </div>
    </body>
</html>
