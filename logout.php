<?php

session_start ();
//destruindo todas sessions 
session_destroy();

// caso queira 1 especifica 
// unset ($_SESSION['NOMEDASESSION']);
// neste caso estamos usando apenas 1 session entao podemos destruir todas <!DOCTYPE html>

header ('Location: index.php');
exit();
?>