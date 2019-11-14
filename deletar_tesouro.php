<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `tesouro` WHERE id_tesouro = $id";
$deletar = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/apagar_itens.css">
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
                <div class="container">
                    <h1 id="titulo">Tesouro apagado com sucesso</h1>
                    <a href="listar_tesouros.php" class="btn btn-sm btn-primary" style="color: #ffffff">Voltar</a>
                </div>
            </section>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>