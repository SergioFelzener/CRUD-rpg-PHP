<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <title>Listar Produtos</title>
</head>
<body>
<div class="container">

<h3>Lista de Personagens</h3>
     <table class="table table-sm table-dark">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">NOME</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">ARMA</th>
                <th scope="col">ITEM</th>
                <th scope="col">TESOURO</th>
                <th scope="col">FORÇA</th>
                <th scope="col">DESTREZA</th>
                <th scope="col">INTELIGÊNCIA</th>
                <th scope="col">IMAGEM</th>
                <th scope="col">AÇÃO</th>
              </tr>
            </thead>
           
              
                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM `personagens`"; 
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_personagens = $array ['id_personagens'];
                    $nome = $array ['nome'];
                    $categoria = $array ['categoria'];
                    $armas = $array ['armas'];
                    $itens = $array ['itens'];
                    $tesouros = $array ['tesouros'];
                    $power = $array ['power'];
                    $destreza = $array ['destreza'];
                    $inteli = $array ['inteli'];
                    $img = $array ['img'];

                ?>
                <tr>
                  <td><?php echo $id_personagens ?></td>
                  <td><?php echo $nome ?></td>
                  <td><?php echo $categoria?></td>
                  <td><?php echo $armas ?></td>
                  <td><?php echo $itens ?></td>
                  <td><?php echo $tesouros ?></td>
                  <td><?php echo $power ?></td>
                  <td><?php echo $destreza ?></td>
                  <td><?php echo $inteli ?></td>
                  <td><?php echo $img ?></td>
                  <td><a class="btn btn-primary btn-sm" style="color:#ffffff" href="editar.php?id=<?php echo $id_personagens ?>" 
                    role="button"><i class="fas fa-pencil-alt"></i>&nbsp; &nbsp; Editar</a>

                    <a class="btn btn-danger btn-sm" style="color:#ffffff" href="deletar.php?id=<?php echo $id_personagens ?>" 
                    role="button"><i class="fas fa-trash-alt"></i>&nbsp; &nbsp; Apagar</a></td>
                </tr>
                
                <?php
                //abrindo novamente a tag php e fechando a {} do wilhe apos o td pois o laco vai adicionar elementos ao TD.

                } ?>



              </tr>
            
          </table>
          <div>
          <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
          </div>




<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>