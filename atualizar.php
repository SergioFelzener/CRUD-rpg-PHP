<?php

include 'conexao.php';

$id = $_POST['id'];
// $nproduto = $_POST['nproduto']; nao vamos atualizar esse campo 
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$armas = $_POST['armas'];
$itens = $_POST['itens'];
$tesouros = $_POST['tesouro'];
$power = $_POST['power'];
$destreza = $_POST['destreza'];
$inteli = $_POST['inteli'];


$sql = "UPDATE personagens SET nome = '$nome', categoria = '$categoria', armas = '$armas', itens = '$itens', tesouros = '$tesouros', power = $power, destreza = $destreza, inteli = $inteli WHERE id_personagens = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/apagar_armas.css">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
</head>

<body>
    <main>
        <header>
            <nav>
                <?php include 'painel.php'; ?>
            </nav>
            <section>
                <div class="container" stlye="text-align: center;">
                    <div>
                        <h1 id="titulo">Personagem atualizado com sucesso </h1>
                    </div>
                    <div>
                        <a href="listar.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
                    </div>
                </div>
            </section>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>