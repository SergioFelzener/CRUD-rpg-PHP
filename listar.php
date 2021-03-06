<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
  <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
  <script type="texte/javascript" src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/confirm_delete.js"></script>
  <script src="js/sidenav.js"></script>
  <title>Listar Produtos</title>
  <style>
    body {
      background-image: url(img/fmred2.jpeg);
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
  </style>
</head>

<body>
  <header>
    <nav>
      <?php include 'painel.php'; ?>
    </nav>
  </header>
  <main>
    <div class="container">
      <h1>Lista de Personagens</h1>
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
            <th scope="col">Editar</th>
            <?php
            if ($_SESSION['nivel'] == 1) {
              ?>
              <th scope="col">Deletar</th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'conexao.php';
          $sql = "SELECT * FROM `personagens`";
          $busca = mysqli_query($conexao, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $id_personagens = $array['id_personagens'];
            $nome = $array['nome'];
            $categoria = $array['categoria'];
            $armas = $array['armas'];
            $itens = $array['itens'];
            $tesouros = $array['tesouros'];
            $power = $array['power'];
            $destreza = $array['destreza'];
            $inteli = $array['inteli'];
            $img = $array['img'];
            ?>
            <tr>
              <td><?= $id_personagens ?></td>
              <td><?= $nome ?></td>
              <td><?= $categoria ?></td>
              <td><?= $armas ?></td>
              <td><?= $itens ?></td>
              <td><?= $tesouros ?></td>
              <td><?= $power ?></td>
              <td><?= $destreza ?></td>
              <td><?= $inteli ?></td>
              <td><img style='height: 70px;' src=uploads/<?= $img ?>> </td> <td>
                <a class="btn btn-primary btn-sm" style="color:#ffffff" href="editar.php?id=<?= $id_personagens ?>" role="button"><i class="fas fa-pencil-alt"></i> </a>
              </td>
              <?php if ($_SESSION['nivel'] == 1) { ?>
                <td>
                  <a class="btn btn-danger btn-sm" style="color:#ffffff" data-confirm='Tem certeza que deseja apagar esse item?' href="deletar.php?id=<?php echo $id_personagens ?>" role="button"><i class="fas fa-trash-alt"></i> </a>
                </td>
              <?php } ?>
            </tr>
          <?php
            //abrindo novamente a tag php e fechando a {} do while apos o td pois o laco vai adicionar elementos ao TD.
          } ?>
        </tbody>
      </table>
      <div>
        <a href="menu.php" role="button" class="btn btn-sm btn-primary float-right">voltar</a>
      </div>
  </main>
  <footer class="fixarfooter">
    <?php include 'footer.php'; ?>
  </footer>


</body>

</html>