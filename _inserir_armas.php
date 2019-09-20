<?php

include 'conexao.php';

$armas = $_POST['armas'];

$sql = "INSERT INTO armas(nome_arma) values ('$armas')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Arma Criada com sucesso </h3>
    <a href="adicionar_armas.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>