<?php

include 'conexao.php';
// Buscado ID pelo metodo GET armazenando na variavel $id 
$id=$_GET['id'];

$deletar = "DELETE FROM usuario WHERE usuario_id = $id";
$fila = mysqli_query($conexao, $deletar);

// executa a acao e retorna ao aprovar_usuariophp
header ("location: aprovar_usuario.php"); // redireciona a pagina de aprovacao 



