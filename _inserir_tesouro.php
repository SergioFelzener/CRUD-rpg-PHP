<?php

include 'conexao.php';

$tesouro = $_POST['tesouro'];

$sql = "INSERT INTO tesouro(nome_tesouro) values ('$tesouro')";
$inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/inserir_itens.css">
        <title>Inserir Tesouro</title>
    </head>
    <style>
         body{
            background-image:url(img/adicionar_tesouros.jpg);
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
                    <h1 id="titulo"> Tesouro Criado com sucesso </h1>
                </div>
                <div>
                    <a href="adicionar_tesouro.php" class="btn btn-sm btn-primary" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>



