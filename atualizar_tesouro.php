<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nomecategoria = $_POST['nomecategoria']; 
$nome_tesouro = $_POST['nome_tesouro'];

$sql = "UPDATE `tesouro` SET `nome_tesouro`= '$nome_tesouro'  WHERE id_tesouro = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/apagar_itens.css">
        <title>Atualizar Tesouro</title>
    </head>
         <body>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo"> Tesouro Editado com sucesso </h2>
                </div>
                <div>
                    <a href="listar_tesouros.php" class="btn btn-sm btn-warning float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>