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
    <link rel="stylesheet" type="text/css" href="css/menustyle.css">
    <title>Menu</title>
</head>
<body>

<div class="cards-list">
  
<div class="card 1">
  <div class="card_image">  <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" /> </div>
  <div class="card_title title-white">
    <p id="titulo">Adicionar Personagem</p>
    <a href="adicionar.php" class="btn btn-success">Adicionar</a>
  </div>
</div>

  <div class="card 2">
  <div class="card_image">
    <img src="img/200w11.webp" />
    </div>
  <div class="card_title title-white">
    <p id="titulo">Adicionar Armas</p>
    <a href="adicionar_armas.php" class="btn btn-success">Adicionar</a>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <img src="img/200w11.webp" />
  </div>
  <div class="card_title title-white">
    <p id="titulo">Adicionar Itens</p>
    <a href="adicionar_itens.php" class="btn btn-success">Adicionar</a>
  </div>
</div>
  
  <div class="card 4">
  <div class="card_image">
    <img src="img/200w2.webp" />
    </div>
  <div class="card_title title-white">
    <p id="titulo">Adicionar Tesouros</p>
    <a href="adicionar_tesouro.php" class="btn btn-success">Adicionar</a>
  </div>
  </div>

</div>
<div class="cards-list">
  
<div class="card 5">
  <div class="card_image"> <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" /> </div>
  <div class="card_title title-white">
    <p id="titulo">Lista de Personagens</p>
    <a href="listar.php" class="btn btn-primary">Listar</a>
  </div>
 
</div>

  <div class="card 6">
  <div class="card_image">
    <img src="img/200w11.webp" />
    </div>
    <div class="card_title title-white">
    <p id="titulo">Lista de Armas</p>
    <a href="listar_armas.php" class="btn btn-primary">Listar</a>
  </div>
    
</div>

<div class="card 7">
  <div class="card_image">
    <img src="img/200w11.webp" />
  </div>
  <div class="card_title title-white">
    <p id="titulo">Listar Itens</p>
    <a href="listar_itens.php" class="btn btn-primary">Listar</a>
  </div>
  
</div>
  
  <div class="card 8">
  <div class="card_image">
    <img src="img/200w2.webp" />
    </div>
    <div class="card_title title-white">
    <p id="titulo">Listar Tesouros</p>
    <a href="listar_tesouros.php" class="btn btn-primary">Listar</a>
  </div>
  </div>

</div>
<div class="cards-list">
  
<div class="card 9">
  <div class="card_image"> <img src="img/200w7.webp" /> </div>
  <div class="card_title title-white">
    <p id="titulo">Adicionar Categoria</p>
    <a href="adicionar_categoria.php" class="btn btn-success">Adicionar</a>
  </div>
</div>

  <div class="card 10">
  <div class="card_image">
    <img src="img/200w7.webp" />
    </div>
  <div class="card_title title-white">
    <p id="titulo">Listar Categorias</p>
    <a href="listar_categoria.php" class="btn btn-primary">Listar</a>
  </div>
</div>
<?php

  if ($nivel == 1){

?>

<div class="card 11">
  <div class="card_image">
  <img src="img/administrador.png" />
  </div>
  <div class="card_title">
    <p id="titulo">Aprovar Usuários</p>
    <a href="aprovar_usuario.php" class="btn btn-danger">Aprovar</a>
  </div>
</div>

  <?php } ?>
  
  <div class="card 12">
  <div class="card_image">
    <img src="img/administrador.png" />
    </div>
  <div class="card_title title-black">
    <p id="titulo">Listar Usuários</p>
    <a href="listar_usuarios.php" class="btn btn-primary">Listar</a>
  </div>
  </div>

</div>





</body>
</html>
