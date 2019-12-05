<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="texte/javascript" src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/confirm_delete.js"></script>
  <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
  <script src="js/sidenav.js"></script>
  <style>
    @font-face {
      font-family: "teste";
      src: url(font/zelda.ttf);
      font-style: normal;
      font-weight: 100;
    }

    #titulo {
      font-family: "teste";
      font-size: 70px;
      text-align: center;
      padding: 1rem;
      color: #e0dfdc;
      letter-spacing: .1em;
      text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e,
        0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a,
        0 4px 0 #282828, 0 5px 0 #262626,
        0 6px 0 #242424, 0 7px 0 #222,
        0 8px 0 #202020, 0 9px 0 #1e1e1e,
        0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a,
        0 12px 0 #181818, 0 13px 0 #161616,
        0 14px 0 #141414, 0 15px 0 #121212,
        0 22px 30px rgba(0, 0, 0, 0.9);
    }

    #titulo2 {
      font-family: "teste";
      font-size: 30px;
      text-align: center;
      padding: 1rem;
      color: blue;
      letter-spacing: .1em;
      
    }

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
    }

    h3 {
      text-align: center;
    }

    h1 {
      text-align: center;
    }

    h6 {
      font-size: 14px;
      ;
    }

    p {
      text-align: center;
    }

    .card {
      border-radius: 20px;
      background: white;
      box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
      text-align: center;


      transition: 0.5s ease;
      cursor: pointer;
      margin: 30px;
    }

    ul {
      list-style-type: none;
      text-align: center;
      padding-inline-start: 0px;
    }
  </style>
  <title>Lista de personagens</title>
</head>

<body>
  <header>
    <nav>
      <?php include("painel.php"); ?>
    </nav>
    <h1 id="titulo">Lista de Personagens</h1>
  </header>>
    <main>
    <div class="container ">
      <div class="row">
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
          <div class='col-lg-4 col-md-6 col-sm-12 col-xs-12' style='padding-left: 0%; padding-top: 5%;'>
            <div class="card" style="width: 87%;">
              <?php echo "<img style='height: 180px; padding: 2%; border-top-left-radius: 15px; border-top-right-radius: 15px;''class='card-img-top'  src=uploads/$img></img>" ?>
              <div class="card-body">
                <h5 class="card-title">#ID <?php echo $id_personagens ?></h5>
                <p class="card-text" id="titulo2"><?php echo $nome ?></p>
              </div>
              <ul>
                <li>
                  <h6>Categoria: <?php echo $categoria ?></h6>
                </li>
                <hr>
                <li>
                  <h6>Arma: <?php echo $armas ?></h6>
                </li>
                <hr>
                <li>
                  <h6>Item: <?php echo $itens ?></h6>
                </li>
                <hr>
                <li>
                  <h6>Tesouro: <?php echo $tesouros ?></h6>
                </li>
                <hr>
                <div class="row">
                  <li class='col-4'>
                    <h6>Power</h6><?php echo $power ?>
                  </li>
                  <li class='col-4'>
                    <h6>Destreza</h6><?php echo $destreza ?>
                  </li>
                  <li class='col-4'>
                    <h6>Inteligência</h6><?php echo $inteli ?>
                  </li>
                </div>
              </ul>
              <div class="card-body">
                <a class="btn btn-primary btn-sm card-link " style="color:#ffffff" href="editar.php?id=<?php echo $id_personagens ?>" role="button"><i class="fas fa-pencil-alt ">&nbsp; Editar</i></a>
                <a class="btn btn-danger btn-sm card-link " style="color:#ffffff" data-confirm='Tem certeza que deseja apagar esse Item?' href="deletar.php?id=<?php echo $id_personagens ?>" role="button"><i class="fas fa-trash-alt">&nbsp;Apagar</i></a>
              </div>
            </div>
          </div>
        <?php
          //abrindo novamente a tag php e fechando a {} do while apos o td pois o laco vai adicionar elementos ao TD.
      } ?>
      </div>
  </main>
  <footer class="fixarfooter">
    <?php include 'footer.php'; ?>
  </footer>
</body>

</html>