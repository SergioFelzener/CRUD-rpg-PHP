<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nproduto = $_POST['nproduto']; nao vamos atualizar esse campo 
$nome = $_POST ['nome'];
$categoria = $_POST ['categoria'];
$armas = $_POST ['armas'];
$itens = $_POST ['itens'];
$tesouros = $_POST ['tesouro'];
$power = $_POST ['power'];
$destreza = $_POST ['destreza'];
$inteli = $_POST ['inteli'];


$sql = "UPDATE personagens SET nome = '$nome', categoria = '$categoria', armas = '$armas', itens = '$itens', tesouros = '$tesouros', power = $power, destreza = $destreza, inteli = $inteli WHERE id_personagens = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/apagar_itens.css">
        <title>Atualizar Personagens</title>
    </head>
        <body>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo">Personagem atualizado com sucesso </h1>
                </div>
                <div>
                    <a href="listar.php" class="btn btn-sm btn-warning float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>
