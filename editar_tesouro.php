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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/preview_img.js"></script>
    <title>Adicionar Itens</title>
    <style>
        @font-face {
            font-family: "teste";
            src: url(zelda.ttf);
            font-style: normal;
            font-weight: 100;
        }

        @font-face {
            font-family: "teste2";
            src: url(arkham.ttf);
            font-style: normal;
            font-weight: 100;
        }

        #titulo {
            font-family: "teste";
            font-size: 70px;
            text-align: center;
            padding: 1rem;
            color: #e0dfdc;
            letter-spacing: .1em;
            text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e,
                0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a,
                0 4px 0 #282828, 0 5px 0 #262626,
                0 6px 0 #242424, 0 7px 0 #222,
                0 8px 0 #202020, 0 9px 0 #1e1e1e,
                0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a,
                0 12px 0 #181818, 0 13px 0 #161616,
                0 14px 0 #141414, 0 15px 0 #121212,
                0 22px 30px rgba(0, 0, 0, 0.9);
        }

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

        label {
            font-family: "teste2";
            font-size: 20px;
            letter-spacing: .2em;
            text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e,
                0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a,
                0 4px 0 #282828, 0 5px 0 #262626,
                0 6px 0 #242424, 0 7px 0 #222,
                0 8px 0 #202020, 0 9px 0 #1e1e1e,
                0 8px 0 #1c1c1c, 0 8px 0 #1a1a1a,
                0 8px 0 #181818, 0 8px 0 #161616,
                0 10px 0 #141414, 0 10px 0 #121212,
                0 1px 1px rgba(0, 0, 0, 0.9);
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

<body>
    <header>
        <nav>
            <?php include 'painel.php'; ?>
        </nav>
        <h1 id="titulo"> Editar Tesouros</h1>
    </header>
    <main>
        <div class="container">
            <div class="row col-lg-12">
                <form class="form-style" action="atualizar_tesouro.php" method="POST">
                    <?php

                    $sql = "SELECT * FROM `tesouro` WHERE id_tesouro = $id";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_tesouro = $array['id_tesouro'];
                        $nome_tesouro = $array['nome_tesouro'];


                        ?>


                        <div class="form-group">
                            <label>Id Tesouro</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $id_tesouro ?>" style="color:green;" readonly>
                            <label>Nome do Tesouro</label>
                            <input type="text" class="form-control" name="nome_tesouro" value="<?php echo $nome_tesouro ?>">
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
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>