<?php

include 'conexao.php';

// criando variavel do e recebendo a variavel 
$nome = $_POST ['nome'];
$categoria = $_POST ['categoria'];
$armas = $_POST ['armas'];
$itens = $_POST ['itens'];
$tesouros = $_POST ['tesouro'];
$power = $_POST ['power'];
$destreza = $_POST ['destreza'];
$inteli = $_POST ['inteli'];
$img = $_FILES ['img'];
// verificando o retorno das variaveis 
// echo $sql = "INSERT INTO `estoque`(`nproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')"; 


$imagem = isset($_FILES['img']) ?$_FILES['img']:"";
if (isset($_FILES['img'])) {
    $nomeimg = $imagem ['name'];
    $tipos_permitidos = ['jpg','jpeg','png'];
    $tamanho = $imagem ['size'];
    $extensao = explode('.', $nomeimg);
    $extensao = end($extensao);
    $novo_nome = rand() . '.' . $extensao;

    if(in_array($extensao, $tipos_permitidos)) {
        move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/' . $novo_nome);
    }
} else {
    print "Tipo de arquivo não permitido";
}




$sql = "INSERT INTO `personagens`(`nome`, `categoria`, `armas`, `itens`, `tesouros`, `power`, `destreza`, `inteli`, `img`)  
        VALUES ('$nome', '$categoria', '$armas', '$itens', '$tesouros', $power, $destreza, $inteli, '$novo_nome')"; 

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
