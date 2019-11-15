<?php

include 'conexao.php';
include 'validaUsuario.php';

$categoria = $_POST['categoria'];

if (empty($_POST['categoria'])) {
    
    echo '{"error":"Digite o nome da Categoria"}';
    //header('Location: index.php');
    exit();
}

$sql = "INSERT INTO categoria(nome_categoria) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);
echo '{"categoria":"true"}';
exit();

?>