<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria(nome_categoria) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Categoria criada com Sucesso </h3>
    <a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>