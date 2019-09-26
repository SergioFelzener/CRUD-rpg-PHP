<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
    <style>
      h3 {
        text-align: center;
      }
      h5 {
        text-align: center;
      }
      p {
        text-align: center;
      };;
    </style>
    <title>Listar Produtos</title>
</head>
<body>
<div class="container">
<h3>Lista de Personagens</h3><br>
<div class="row">
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
                <div class='col-4'>
                  <div class="card" style="width: 18rem;">
                    <?php echo "<img style='height: 150px; 'class='card-img-top'  src=uploads/$img></img>"?>
                    <div class="card-body">
                      <h5 class="card-title">#ID  <?php echo $id_personagens?></h5>
                      <p class="card-text"><?php echo $nome ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Categoria</h6><?php echo $categoria?></li>
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Arma</h6><?php echo $armas ?></li>
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Item</h6><?php echo $itens?></li>
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Tesouro</h6><?php echo $tesouros?></li>
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Power</h6><?php echo $power?></li>
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Destreza</h6><?php echo $destreza?></li>
                      <li class="list-group-item"><h6 class="card-subtitle mb-2 text-muted">Inteligencia</h6><?php echo $inteli?></li>
                    </ul>
                    <div class="card-body">
                      <a class="btn btn-primary btn-sm card-link " style="color:#ffffff" href="editar.php?id=<?php echo $id_personagens?>" 
                                      role="button"><i class="fas fa-pencil-alt "></i>&nbsp; &nbsp;</a>
                      <a class="btn btn-danger btn-sm card-link " style="color:#ffffff" data-confirm='Tem certeza que deseja apagar esse Item?' href="deletar.php?id=<?php echo $id_personagens?>" 
                                      role="button"><i class="fas fa-trash-alt"></i>&nbsp; &nbsp;</a>
                    </div>
                  </div><br>
                  </div>
                <?php
                //abrindo novamente a tag php e fechando a {} do while apos o td pois o laco vai adicionar elementos ao TD.
                } ?>
                  <div>
                    <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
                  </div>




<script type="texte/javascript" src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="js/confirm_delete.js"></script>
    
</body>
</html>