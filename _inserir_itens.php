<?php

include 'conexao.php';

$itens = $_POST['itens'];

$sql = "INSERT INTO itens(nome_itens) values ('$itens')";
$inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/inserir_itens.css">
        <title>Inserir Itens</title>
    </head>
        <body>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo"> Item Criado com sucesso </h1>
                </div>
                <div>
                    <a href="adicionar_itens.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>