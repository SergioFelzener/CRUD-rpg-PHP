<?php

include 'conexao.php';

$itens = $_POST['itens'];

$sql = "INSERT INTO itens(nome_itens) values ('$itens')";
$inserir = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/inserir_itens.css">
        <title>Inserir Arma</title>
    </head>
    <style>
         body{
            background-image:url(img/adicionar_itens.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color:#464646;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: 100%;
            color: #ffffff;
        }
       
    </style>
        <body>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h2> Item criado com sucesso </h2>
                </div><br>
                <div>
                    <a href="adicionar_itens.php" class="btn btn-sm btn-warning float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>

