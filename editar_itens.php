<?php

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adicionar_itens.css">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
    <title>Editar Itens</title>

</head>

<body>
    <main>
        <header>
            <nav>
                <?php include 'painel.php'; ?>
            </nav>
            <h1 id="titulo"> Editar Itens</h1>
            <div class="container">
                <div class="row col-lg-12">
                    <form class="form-style" action="atualizar_itens.php" method="POST">
                        <?php

                        $sql = "SELECT * FROM `itens` WHERE id_itens = $id";
                        $buscar = mysqli_query($conexao, $sql);
                        while ($array = mysqli_fetch_array($buscar)) {
                            $id_itens = $array['id_itens'];
                            $nome_itens = $array['nome_itens'];


                            ?>


                            <div class="form-group">
                                <label>Id Item</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $id_itens ?>" style="color:green;" readonly>
                                <label>Nome do Item</label>
                                <input type="text" class="form-control" name="nome_itens" value="<?php echo $nome_itens ?>">
                            </div>
                            <div class="form-group">

                                <div id="btnCadastro">
                                    <a href="menu.php" role="button" class="btn btn-sm btn-primary float-left">voltar</a>
                                    <button type="submit" id="botao" class="btn btn-sm">atualizar</button>
                                </div>
                            <?php  } ?>
                    </form>
                </div>
            </div>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>