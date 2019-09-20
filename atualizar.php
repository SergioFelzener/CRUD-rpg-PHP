<?php

include 'conexao.php';

$id = $_POST ['id'];
// $nproduto = $_POST['nproduto']; nao vamos atualizar esse campo 
$nome = $_POST ['nome'];
$categoria = $_POST ['categoria'];
$armas = $_POST ['armas'];
$itens = $_POST ['itens'];
$tesouros = $_POST ['tesouro'];
$power = $_POST ['power'];
$destreza = $_POST ['destreza'];
$inteli = $_POST ['inteli'];


$sql = "UPDATE personagens SET nome = '$nome', categoria = '$categoria', armas = '$armas', itens = '$itens', tesouros = '$tesouros', power = $power, destreza = $destreza, inteli = $inteli WHERE id_personagens = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h3> Atualizado com sucesso </h3>
    <a href="listar.php" class="btn btn-sm btn-warning" style="color: #ffffff">Voltar</a>

</div>

