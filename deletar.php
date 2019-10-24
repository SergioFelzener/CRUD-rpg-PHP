<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `personagens` WHERE id_personagens = $id";
$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/apagar_itens.css">

<div class="container">
    <h1 id="titulo">Personagem apagado com sucesso</h1>
    <a href="listar.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>
