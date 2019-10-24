<?php
include 'conexao.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/adicionar.css">
        <title>CRUD</title>
    </head>
    <body>
    <div class="container">
        <h1 id="titulo">Editar</h1>
            <div class="row col-lg-12">
                <div class="form-style">
                    <form action="atualizar.php" method="POST">
                <?php

                $sql = "SELECT * FROM `personagens` WHERE id_personagens = $id";
                $buscar = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($buscar)) {

                    $nome = $array['nome'];
                    $categoria = $array['categoria'];
                    $armas = $array['armas'];
                    $itens = $array['itens'];
                    $tesouro = $array['tesouros'];
                    $power = $array['power'];
                    $destreza = $array['destreza'];
                    $inteli = $array['inteli'];

                    ?>
                            <div class="form-group">
                            <input type="number" class="form-control" name="id" value = "<?php echo $id ?>" style="display: none">
                            </div>
                            <div class="form-group">
                                <label for="nome">Nome do personagem</label>
                                <input type="text" class="form-control" name="nome" required="required" value = "<?php echo $nome ?>">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria" autocomplete="off" required="required" value = "<?php echo $categoria ?>">
                                <?php
                                        // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                        // listando a tabela categoria os nomes de categorias criados na base de dados e listando em ordem alfabetica.
                                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                                $buscar = mysqli_query($conexao, $sql);

                                        // buscando valores dentro do banco de dados que e nossa variavel buscar acima 

                                        // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array = mysqli_fetch_array($buscar)) {
                                        //listando id_categoria
                                    $id_categoria = $array['id_categoria'];
                                    $nome_categoria = $array['nome_categoria'];

                                    ?>
                                    <option><?php echo $nome_categoria ?></option>
                                <?php
                                // fechando while depois do option para tal e necessario abrir novamente o php 

                            }
                            ?>  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="armas">Armas</label>
                                <select class="form-control" name="armas" autocomplete="off" required="required" value = "<?php echo $armas ?>">
                                <?php

                                include 'conexao.php';

                                $sql = "SELECT * FROM armas order by nome_arma ASC";
                                $buscar = mysqli_query($conexao, $sql);
                                while ($array = mysqli_fetch_array($buscar)) {

                                    $id_armas = $array['id_armas'];
                                    $nome_arma = $array['nome_arma'];

                                    ?>
                                    <option><?php echo $nome_arma ?></option>
                                <?php

                            }
                            ?>  
                                </select>
                            </div>
                                <div class="form-group">
                                <label for="itens">Itens</label>
                                <select class="form-control" name="itens" autocomplete="off" required="required" value = "<?php echo $itens ?>">
                                <?php

                                include 'conexao.php';

                                $sql = "SELECT * FROM itens order by nome_itens ASC";
                                $buscar = mysqli_query($conexao, $sql);
                                while ($array = mysqli_fetch_array($buscar)) {

                                    $id_itens = $array['id_itens'];
                                    $nome_itens = $array['nome_itens'];

                                    ?>
                                    <option><?php echo $nome_itens ?></option>
                                <?php

                            }
                            ?>  
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="tesouro">Tesouros</label>
                                <select class="form-control" name="tesouro" autocomplete="off" required="required" value = "<?php echo $tesouro ?>">
                                <?php

                                include 'conexao.php';

                                $sql = "SELECT * FROM tesouro order by nome_tesouro ASC";
                                $buscar = mysqli_query($conexao, $sql);
                                while ($array = mysqli_fetch_array($buscar)) {
                                        //listando id_categoria
                                    $id_tesouro = $array['id_tesouro'];
                                    $nome_tesouro = $array['nome_tesouro'];

                                    ?>
                                    <option><?php echo $nome_tesouro ?></option>
                                <?php


                            }
                            ?>  
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Power</label>
                                <input type="number" class="form-control" name="power" required="required" value = "<?php echo $power ?>">
                            </div>
                            <div class="form-group">
                                <label>Destreza</label>
                                <input type="number" class="form-control" name="destreza" required="required" value = "<?php echo $destreza ?>">
                            </div>
                            <div class="form-group">
                                <label>Power</label>
                                <input type="number" class="form-control" name="inteli" required="required" value = "<?php echo $inteli ?>">
                            </div>
                            <div id="btnCadastro">
                                <button type="submit" id="botao" class="btn btn-sm">atualizar</button>
                            </div>
             <?php 
        } ?>

            </form>
        </div>
    </div>
    </div>
    <script type="texte/javascript" src="js/bootstrap.js"></script>
    </body>
</html>