<?php

include 'conexao.php';

$tesouro = $_POST['tesouro'];

$sql = "INSERT INTO tesouro(nome_tesouro) values ('$tesouro')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Tesouro criado com sucesso </h3>
    <a href="adicionar_tesouro.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>