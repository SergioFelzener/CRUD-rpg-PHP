<?php

include 'conexao.php';

$tesouro = $_POST['tesouro'];

$sql = "INSERT INTO tesouro(nome_tesouro) values ('$tesouro')";
$inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/inserir_itens.css">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
    <title>Inserir Tesouro</title>
</head>
<style>
    body {
        background-image: url(img/adicionar_tesouros.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: 100%;
        color: #ffffff;
    }
</style>

<body>
    <main>
        <header>
            <nav>
                <?php include 'painel.php'; ?>
            </nav>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo"> Tesouro Criado com sucesso </h1>
                </div>
                <div>
                    <a href="adicionar_tesouro.php" class="btn btn-sm btn-primary" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>