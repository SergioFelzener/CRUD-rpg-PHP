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
            <h2 style="margin-left:15px; margin-top: 15px;"> Olá, <?php echo $_SESSION['nome'];?></h2>
        </a>
        <h6><a href="logout.php" class="float-left" style="margin-left:40px;">Sair</a></h6><br><br>
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



