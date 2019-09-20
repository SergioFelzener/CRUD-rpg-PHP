<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <title>Listar Tesouros</title>
</head>
<body>
<div class="container">

<h3>Lista de Tesouros</h3>
     <table class="table table-sm table-dark">
            <thead>
              <tr>
                <th scope="col">#id_tesouro</th>
                <th scope="col">Nome Tesouro</th>
                <th scope="col">Ação</th>
             </tr>
            </thead>
           
              
                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM `tesouro`"; 
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_tesouro = $array ['id_tesouro'];
                    $nome_tesouro = $array ['nome_tesouro'];
             

                ?>
                <tr>
                  <td><?php echo $id_tesouro ?></td>
                  <td><?php echo $nome_tesouro ?></td>
             
                  <td><a class="btn btn-primary btn-sm" style="color:#ffffff" href="editar_tesouro.php?id=<?php echo $id_armas ?>" 
                    role="button"><i class="fas fa-pencil-alt"></i>&nbsp; &nbsp; Editar</a>

                    <a class="btn btn-danger btn-sm" style="color:#ffffff" href="deletar_tesouro.php?id=<?php echo $id_armas ?>" 
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