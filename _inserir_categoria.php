<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria(nome_categoria) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/inserir_armas.css">
        <title>Inserir Categoria</title>
    </head>
    <style>
         body{
            background-image:url(img/categoria2.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color:#464646;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: 100%;
            color: #ffffff;
        }
       
    </style>
        <body>
            <div class="container" stlye="text-align: center;">
                <div>
                    <h1 id="titulo"> Categoria Criada com sucesso </h2>
                </div>
                <div>
                    <a href="adicionar_categoria.php" class="btn btn-sm btn-primary float-center" style="color: #ffffff">Voltar</a>
                </div>
            </div>
        </body>
</html>

