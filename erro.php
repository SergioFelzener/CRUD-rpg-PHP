<?php
//iniciando session
session_start();

//incluindo conexao PHP
include ("conexao.php");



$erro = $_POST['erro'];
$sql = "INSERT INTO erro(erro) values ('$erro')";

if ($conexao -> query($sql) === TRUE) {
    echo 'SUCESSO';
}





?>