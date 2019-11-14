<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nomecategoria = $_POST['nomecategoria']; 
$nomecategoria = $_POST['nomecategoria'];

$sql = "UPDATE `categoria` SET `nome_categoria`= '$nomecategoria'  WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/apagar_itens.css">
        <title>Inserir Categoria</title>
    </head>
    <style>
         body{
            background-image:url(img/categoria2.jpg);
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
                    <h1 id="titulo"> Categoria Editada com sucesso </h1>
                </div>
                <div>
                    <a href="listar_categoria.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>
