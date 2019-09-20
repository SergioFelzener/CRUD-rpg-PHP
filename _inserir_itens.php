<?php

include 'conexao.php';

$itens = $_POST['itens'];

$sql = "INSERT INTO itens(nome_itens) values ('$itens')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Item criado com sucesso </h3>
    <a href="adicionar_itens.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>