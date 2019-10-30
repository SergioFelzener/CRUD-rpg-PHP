<?php
session_start();
//capturando session armazenada =)
if(session_id() == '' || !isset($_SESSION) || !$_SESSION['nome']) {
    header ('Location: index.php');
    exit();
}
?>

<!-- sidenav -->
<header>
  <nav>
    <span style="font-size:50px;cursor:pointer" onclick="openNav()">
        <img style="display:inline" src="https://img.icons8.com/cute-clipart/64/000000/list.png">
    </span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">
            <h2 style="font-size:25px; margin-left:15px; margin-top: 15px;"> Olá, <?php echo $_SESSION['nome'];?></h2>
        </a>
        <a href="adicionar.php" style="margin-left:15px; margin-top: 10px;">Adicionar Personagem</a>
        <a href="listar2.php" style="margin-left:15px; margin-top: 10px;">Listar Personagens</a>
        <a href="adicionar_categoria.php" style="margin-left:15px; margin-top: 10px;">Adicionar Categoria</a>
        <a href="listar_categoria.php" style="margin-left:15px; margin-top: 10px;">Listar Categorias</a>
        <a href="adicionar_armas.php" style="margin-left:15px; margin-top: 10px;">Adicionar Armas</a>
        <a href="listar_armas.php" style="margin-left:15px; margin-top: 10px;">Listar Armas</a>
        <a href="adicionar_itens.php" style="margin-left:15px; margin-top: 10px;">Adicionar Itens</a>
        <a href="listar_itens.php" style="margin-left:15px; margin-top: 10x;">Listar Itens</a>
        <a href="adicionar_tesouro.php" style="margin-left:15px; margin-top: 10px;">Adicionar Tesouro</a>
        <a href="listar_tesouros.php" style="margin-left:15px; margin-top: 10px;">Listar Tesouros</a>
        <a href="menu.php" class="float-right" style="margin-left:5;">Voltar</a>
        <a href="logout.php" class="float-left" style="margin-left:15px;">Sair</a>
    </div>
  </nav>
</header>






<?php

//include 'conexao.php';

//$usuario = $_SESSION['nome'];

//$sql = "SELECT nivel FROM usuario WHERE nome = '$usuario' and status = 'Ativo'";
//$buscar = mysqli_query($conexao,$sql);
//$array = mysqli_fetch_array($buscar);
//$nivel = $array ['nivel'];
?>



