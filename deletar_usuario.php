<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `usuario` WHERE usuario_id = $id";
$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Deletado com sucesso </h3>
    <a href="aprovar_usuario.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>
