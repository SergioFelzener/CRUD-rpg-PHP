<?php
//start de session para verificacao de usuario 
session_start();
// se a session do usuario NAO existir note que temos o "!" negando a condicao  
if(!$_SESSION['nome']) {
    header ('Location: index.php');
    exit();
}