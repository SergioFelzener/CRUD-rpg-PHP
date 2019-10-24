<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nomecategoria = $_POST['nomecategoria']; 
$nome_arma = $_POST['nome_arma'];

$sql = "UPDATE `armas` SET `nome_arma`= '$nome_arma'  WHERE id_armas = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/adicionar_armas.css">
        <title>Inserir Categoria</title>
    </head>
        <body>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h2> Arma Editada com sucesso </h2>
                </div>
                <div>
                    <a href="listar_armas.php" class="btn btn-sm btn-warning float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>
