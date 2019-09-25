<?php

include 'painel.php'
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Menu</title>
</head>
<body>
    <div class="container-fluid">
    
        <div class="card-deck" style="margin-left: 7%; margin-top: 5%;">
            <div class="row" style="padding:1em;">
            <?php 

                if (($nivel == 1)||($nivel == 2 )) {
            ?>

                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/addpers.jpg" alt="Imagem de capa do card">
                        <div class="card-body"><br>
                            <h6 class="pink-text pb-2 pt-1">Adicionar Personagem</h6>
                            <p class="font-weight-bold card-title">Adicionar Personagem ao banco de dados</p><br><br><br><br>
                            <a href="adicionar.php" class="btn btn-primary">Adicionar</a>
                        </div>
                </div>
                <?php } ?>

                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/addpers.jpg" alt="Imagem de capa do card">
                        <div class="card-body"><br>
                            <h6 class="card-title">Lista de Personagens</h6>
                            <p class="card-text">Listar, Editar e Deletar personagens no Banco de Dados</p><br><br><br>
                            <a href="listar.php" class="btn btn-primary">Listar</a>
                        </div>
                </div>
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/listararmas.png" alt="Imagem de capa do card">
                        <div class="card-body"><br>
                            <h6 class="card-title">Lista de Armas</h6><br>
                            <p class="card-text">Listar, Editar e Deletar Armas no Banco de Dados</p><br><br><br><br>
                            <a href="listar_armas.php" class="btn btn-primary">Listar</a>
                        </div>
                </div>
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/itens.png" alt="Imagem de capa do card">
                        <div class="card-body"><br><br>
                            <h6 class="card-title">Lista de Itens</h6>
                            <p class="card-text">Listar, Editar e Deletar Itens no Banco de Dados</p><br><br><br><br><br>
                            <a href="listar_itens.php" class="btn btn-primary">Listar</a>
                        </div>
                </div>
        
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/tesouros.gif" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h6 class="card-title">Lista de Tesouros</h6>
                            <p class="card-text">Listar, Editar e Deletar Tesouros no Banco de Dados</p><br>
                            <a href="listar_tesouros.php" class="btn btn-primary">Listar</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="card-deck" style="margin-left: 7%; margin-top: 2%; margin-rigth: 5%;">
            <div class="row" style="padding:1em;">
            <?php 

            if (($nivel == 1) || ($nivel == 2)) {

            ?>
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/rpgcat.png" alt="Imagem de capa do card">
                        <div class="card-body"><br><br>
                            <h6 class="card-title">Adicionar Categoria</h6><br>
                            <p class="card-text">Adicionar categorias ao banco de dados</p><br><br>
                            <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar</a>
                        </div>
                </div>
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/armasdd.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h6 class="card-title">Adicionar Armas</h6><br>
                            <p class="card-text">Adicionar Armas ao banco de dados</p><br><br>
                            <a href="adicionar_armas.php" class="btn btn-primary">Cadastrar</a>
                        </div>
                </div>
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/Magic_Items.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h6 class="card-title">Adicionar Itens</h6><br>
                            <p class="card-text">Adicionar Itens ao banco de dados</p><br><br><br>
                            <a href="adicionar_itens.php" class="btn btn-primary">Cadastrar</a>
                        </div>
                </div>
                
                <div id="card" class="card-body card-body-cascade" style="width: 10rem;">
                    <img class="card-img-top" src="img/tesadd.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h6 class="card-title">Adicionar Tesouros</h6>
                            <p class="card-text">Adicionar Tesouros ao banco de dados</p>
                            <a href="adicionar_tesouro.php" class="btn btn-primary">Cadastrar</a>
                        </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="card-deck" style="margin-left: 7%; margin-top: 2%;">
            <div class="row" style="padding:1em;">

            <?php

                if ($nivel == 1) {
            ?>

          
                <div class="card-body card-body-cascade" style="width: 15rem;">
                    <img class="card-img-top" src="img/administrador.png" alt="Imagem de capa do card">
                        <div class="card-body"><h5>Aprovar Usuários Cadastrados</h5>
                            <p class="card-text">Aprovar Usuarios no banco de dados dando suas permições</p>
                            <a href="aprovar_usuario.php" class="btn btn-primary">aprovar</a>
                        </div>
                </div>
                <div class="card-body card-body-cascade" style="width: 15rem;">
                    <img class="card-img-top" src="img/administrador.png" alt="Imagem de capa do card">
                        <div class="card-body"><h5>Listar Usuários Cadastrados</h5>
                            <p class="card-text">listar Usuarios no banco de dados e suas permições</p><br>
                            <a href="aprovar_usuario.php" class="btn btn-primary">Listar</a>
                        </div>
                </div>
                <?php } ?>
        
    </div>


<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>