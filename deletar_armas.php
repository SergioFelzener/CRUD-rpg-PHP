<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `armas` WHERE id_armas = $id";
$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/apagar_armas.css">

<div class="container">
    <h1 id="titulo">Arma apagada com sucesso</h1>
    <a href="listar_armas.php" class="btn btn-sm btn-primary" style="color: #ffffff">Voltar</a>

</div>