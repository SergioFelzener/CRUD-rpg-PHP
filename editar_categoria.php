<?php

    include 'conexao.php';

    echo $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Editar Categoria</title>
    </head>
    <body>
    <div class="container" id="tamanhoContainer">
        <h4>Edição de categoria</h4>
            <form action="atualizar_categoria.php" method="POST">
                <?php

                    $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
                    $buscar = mysqli_query($conexao, $sql);
                        while ($array = mysqli_fetch_array($buscar)) {
                                        $id_categoria = $array ['id_categoria'];
                                        $nomecategoria = $array ['nome_categoria'];
                                

                ?>

                            
                            <div class="form-group">
                                <label>Nome Categoria</label>
                                <input type="text" class="form-control" name="nomecategoria" value = "<?php echo $nomecategoria ?>">
                                <input type="text" class="form-control" name="id" value = "<?php echo $id_categoria ?>" style="dislpay:none;">
                            </div>
                            <div class="form-group">
               
                            <div id="btnCadastro">
                                <button type="submit" id="botao" class="btn btn-sm">atualizar</button>
                            </div>
             <?php       } ?>

            </form>




    </div>



    <script type="texte/javascript" src="js/bootstrap.js"></script>
    </body>
</html>