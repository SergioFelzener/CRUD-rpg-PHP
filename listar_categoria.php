<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inserir_itens.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <title>Listar Categorias</title>
</head>
<style>
  body{
        background-image:url(img/fmred2.jpeg);
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
<div class="container">

<h1 id="titulo">Lista de Categorias</h1>
    <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">#id_categoria</th>
                <th scope="col">Nome Categoria</th>
                <th scope="col">Ação</th>
             </tr>
            </thead>
           
              
                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM `categoria`"; 
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_categoria = $array ['id_categoria'];
                    $nomecategoria = $array ['nome_categoria'];
             

                ?>
                <tr>
                  <td><?php echo $id_categoria ?></td>
                  <td><?php echo $nomecategoria ?></td>
             
                  <td><a class="btn btn-primary btn-sm" style="color:#ffffff" href="editar_categoria.php?id=<?php echo $id_categoria ?>" 
                    role="button"><i class="fas fa-pencil-alt"></i>&nbsp; &nbsp; Editar</a>

                    <a class="btn btn-danger btn-sm" style="color:#ffffff" data-confirm='Tem certeza que deseja apagar esse item?' href="deletar_categoria.php?id=<?php echo $id_categoria ?>" 
                    role="button"><i class="fas fa-trash-alt"></i>&nbsp; &nbsp; Apagar</a></td>
                </tr>
                
                <?php
                //abrindo novamente a tag php e fechando a {} do wilhe apos o td pois o laco vai adicionar elementos ao TD.

                } ?>



              </tr>
            
          </table>
          <div>
          <a href="menu.php" role="button" class="btn btn-sm btn-primary float-right">voltar</a>
          </div>




          <script type="texte/javascript" src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="js/confirm_delete.js"></script>
    
</body>
</html>