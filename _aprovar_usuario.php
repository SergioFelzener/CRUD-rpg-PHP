<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1){

    $update = "UPDATE usuario SET status = 'Ativo', nivel = 1 WHERE usuario_id = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
}
if ($nivel == 2){

    $update = "UPDATE usuario SET status = 'Ativo', nivel = 2 WHERE usuario_id = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "FUNCIONÁRIO APROVADO";
}
if ($nivel == 3){

    $update = "UPDATE usuario SET status = 'Ativo', nivel = 3 WHERE usuario_id = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "CONFERENTE APROVADO"; 
    }
// executa a acao e retorna ao aprovar_usuariophp
header ("location: aprovar_usuario.php"); // redireciona a pagina de aprovacao 
?>
