<?php

include 'conexao.php';

// criando variavel do e recebendo a variavel 
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$armas = $_POST['armas'];
$itens = $_POST['itens'];
$tesouros = $_POST['tesouro'];
$power = $_POST['power'];
$destreza = $_POST['destreza'];
$inteli = $_POST['inteli'];
$img = $_FILES['img'];
// verificando o retorno das variaveis 
// echo $sql = "INSERT INTO `estoque`(`nproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')"; 


$imagem = isset($_FILES['img']) ? $_FILES['img'] : "";
if (isset($_FILES['img'])) {
    $nomeimg = $imagem['name'];
    $tipos_permitidos = ['jpg', 'jpeg', 'png'];
    $tamanho = $imagem['size'];
    $extensao = explode('.', $nomeimg);
    $extensao = end($extensao);
    $novo_nome = rand() . '.' . $extensao;

    if (in_array($extensao, $tipos_permitidos)) {
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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/inserir.css">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
    <title>Inserir Personagens</title>
</head>

<body>
    <main>
        <header>
            <nav>
                <?php include 'painel.php'; ?>
            </nav>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo"> Personagem Criado com sucesso </h1>
                </div>
                <div>
                    <a href="adicionar.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>