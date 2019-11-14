<?php
include 'validaUsuario.php';
include 'conexao.php';

$armas = $_POST['armas'];

if (empty($_POST['armas'])) {
    
    echo '{"error":"Digite o nome da arma"}';
    //header('Location: index.php');
    exit();
}

$sql = "INSERT INTO armas(nome_arma) values ('$armas')";
$inserir = mysqli_query($conexao, $sql);
echo '{"armas":"true"}';
exit();
?>
