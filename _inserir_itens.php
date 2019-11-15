<?php
include 'validaUsuario.php';
include 'conexao.php';

$itens = $_POST['itens'];

if (empty($_POST['itens'])) {
    
    echo '{"error":"Digite o nome do Item"}';
    //header('Location: index.php');
    exit();
}

$sql = "INSERT INTO itens(nome_itens) values ('$itens')";
$inserir = mysqli_query($conexao, $sql);
echo '{"itens":"true"}';
exit();
?>