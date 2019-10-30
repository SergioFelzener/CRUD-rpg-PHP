<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
    <title>Listar Usuários</title>
</head>
<style>
  body{
        background-image:url(img/fmgreen.png);
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
    <?php include("painel.php");?>
    <div class="container">
      <h2>Listar Usuários</h2>
        <table class="table table-sm table-dark">
              <thead>
                <tr>
                  <th scope="col">#id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Usuário</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Data do Cadastro</th>
                  <th scope="col">Status</th>
                  <th scope="col">Nível</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>

                  <?php

                    include 'conexao.php';
                    $sql = "SELECT * FROM `usuario`"; 
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {
                        $id_usuario = $array ['usuario_id'];
                        $nome = $array ['nome'];
                        $usuario = $array ['usuario'];
                        $email = $array ['email'];
                        $data_cadastro = $array ['data_cadastro'];
                        $status = $array ['status'];
                        $nivel = $array ['nivel'];
                        
              

                  ?>
                  <tr>
                    <td><?php echo $id_usuario ?></td>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $usuario ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $data_cadastro ?></td>
                    <td><?php echo $status ?></td>
                    <td><?php echo $nivel ?></td>
                      <!-- &nbsp; &nbsp dando espaço-->
                    <td>
                      <a class="btn btn-danger btn-sm" style="color:#ffffff" href="deletar_user.php?id=<?php echo $id_usuario ?>" 
                      role="button"><i class="fas fa-hand-middle-finger"></i>&nbsp; Apagar</a></td>
                  </tr>
                  
                  <?php
                  //abrindo novamente a tag php e fechando a {} do while apos o td pois o laco vai adicionar elementos ao TD.

                  } ?>



                  </tr>
              
          </table>
            <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
      </div>
    </body>
  </html>