<?php
include 'validaUsuario.php';
include 'conexao.php';

$tesouro = $_POST['tesouro'];

if (empty($_POST['tesouro'])) {
    
    echo '{"error":"Digite o nome do tesouro"}';
    //header('Location: index.php');
    exit();
}

$sql = "INSERT INTO tesouro(nome_tesouro) values ('$tesouro')";
$inserir = mysqli_query($conexao, $sql);
echo '{"tesouro":"true"}';
exit();
?>