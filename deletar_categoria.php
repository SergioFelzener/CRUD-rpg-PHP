<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/apagar_itens.css">

<div class="container">
    <h1 id="titulo">Categoria apagada com sucesso</h1>
    <a href="listar_categoria.php" class="btn btn-sm btn-primary" style="color: #ffffff">Voltar</a>

</div>
