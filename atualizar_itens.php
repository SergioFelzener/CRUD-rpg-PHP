<?php

include 'conexao.php';

$id = $_POST['id'];
// $nomecategoria = $_POST['nomecategoria']; 
$nome_itens = $_POST['nome_itens'];

$sql = "UPDATE `itens` SET `nome_itens`= '$nome_itens'  WHERE id_itens = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/apagar_itens.css">
    <title>Inserir Itens</title>
</head>

<body>
    <div class="container" stlye="text-align: center;">
        <div>
            <h1 id="titulo">Item Editado com sucesso </h1>
        </div>
        <div>
            <a href="listar_itens.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
        </div>
    </div>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>