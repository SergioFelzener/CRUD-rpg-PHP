<?php

include 'conexao.php';

// criando variavel do e recebendo a variavel 
$nome = $_POST ['nome_personagem'];
$categoria = $_POST ['categoria'];
$armas = $_POST ['armas'];
$itens = $_POST ['itens'];
$tesouros = $_POST ['tesouro'];
$power = $_POST ['power'];
$destreza = $_POST ['destreza'];
$inteli = $_POST ['inteli'];
//$img = $_POST ['img'];
// verificando o retorno das variaveis 
// echo $sql = "INSERT INTO `estoque`(`nproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')"; 

$sql = "INSERT INTO `personagens`(`nome`, `categoria`, `armas`, `itens`, `tesouros`, `power`, `destreza`, `inteli`)  
        VALUES ('$nome', '$categoria', '$armas', '$itens', '$tesouros', $power, $destreza, $inteli)"; 

$inserir = mysqli_query($conexao, $sql);

// verificando as variaveis 
//echo $nproduto;
//echo "<br>";
//echo $nomeproduto;
//echo "<br>";
//echo $categoria

?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h4>PERSONAGEM CADASTRADO COM SUCESSO</h4>
<div style="padding-top: 20px">
    <a href="adicionar.php" role="button" class="btn btn-sm">Cadastrar novo PERSONAGEM</a>
    <a href="menu.php" role="button" class="btn btn-sm">Voltar o menu </a>
</div>
</div>
