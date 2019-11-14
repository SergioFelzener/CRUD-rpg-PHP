<?php

include 'conexao.php';

$armas = $_POST['armas'];

$sql = "INSERT INTO armas(nome_arma) values ('$armas')";
$inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/inserir_armas.css">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
    <title>Inserir Arma</title>
</head>

<body>
    <main>
        <header>
            <nav>
                <?php include 'painel.php'; ?>
            </nav>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo"> Arma Criada com sucesso </h1>
                </div>
                <div>
                    <a href="adicionar_armas.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>