<?php

$login=$_POST["user"];
$senha=$_POST["pass"];

if (($login == "sergio") && ($senha == "senha")){

    echo '<script>window.location="user.php";</script>';
    
    }else {
    
    echo '<script type="text/javascript>alert("Usuario ou Senha invalido!")</script>';
    
    }
    
    ?>
 
