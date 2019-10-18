<?php

include 'conexao.php';

$armas = $_POST['armas'];

$sql = "INSERT INTO armas(nome_arma) values ('$armas')";
$inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/inserir_armas.css">
        <title>Inserir Arma</title>
    </head>
    <style>
         body{
            background-image:url(img/adicionar_armas.jpeg);
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
                    <h2> Arma Criada com sucesso </h2>
                </div>
                <div>
                    <a href="adicionar_armas.php" class="btn btn-sm btn-warning float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>