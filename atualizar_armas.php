<?php

include 'conexao.php';

$id = $_POST['id'];
// $nomecategoria = $_POST['nomecategoria']; 
$nome_arma = $_POST['nome_arma'];

$sql = "UPDATE `armas` SET `nome_arma`= '$nome_arma'  WHERE id_armas = $id";

$atualizar = mysqli_query($conexao, $sql);

?>


<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/apagar_itens.css">
    <title>Inserir Categoria</title>
</head>

<body>
    <div class="container" stlye="text-align: center;">
        <div>
            <h1 id="titulo"> Arma Editada com sucesso </h1>
        </div>
        <div>
            <a href="listar_armas.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
        </div>
    </div>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>