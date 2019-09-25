<?php
//capturando session armazenada =)
if(session_id() == '' || !isset($_SESSION)) {
    // session_start(); // com o session start estava dando noticia que a session ja esta aberta no verificaPHP
}
// estando para obter resultado de session desativado
// print_r($_SESSION);exit;
include ('verifica_login.php');
?>

<h2 style="margin-left:15px; margin-top: 15px;"> Olá, <?php echo $_SESSION['nome'];?></h2>



<?php

include 'conexao.php';

$usuario = $_SESSION['nome'];

$sql = "SELECT nivel FROM usuario WHERE nome = '$usuario' and status = 'Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array ['nivel'];
?>

<h6><a href="logout.php" class="float-left" style="margin-left:40px;">Fazer o LOGOUT</a></h6><br><br>

