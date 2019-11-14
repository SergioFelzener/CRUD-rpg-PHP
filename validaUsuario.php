<?php
session_start();
//capturando session armazenada =)
if(session_id() == '' || !isset($_SESSION) || !$_SESSION['nome']) {
    header ('Location: index.php');
    exit();
}
?>