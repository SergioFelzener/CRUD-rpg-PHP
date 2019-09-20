<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nomecategoria = $_POST['nomecategoria']; 
$nomecategoria = $_POST['nomecategoria'];

$sql = "UPDATE `categoria` SET `nome_categoria`= '$nomecategoria'  WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Atualizado com sucesso </h3>
    <a href="listar_categoria.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>

