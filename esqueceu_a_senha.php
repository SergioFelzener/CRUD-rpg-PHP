<?php

include 'conexao.php';

if (isset($_POST['ok'])){

    $email = $mysqli->escape_string($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro[] = "Email Invalido";
    }


    if (count($erro)== 0){
    $novasenha = substr(md5(time()), 0, 6);
    $nscriptgrofada = md5(md5($novasenha));
    

 if(mail($email, "Sua nova Senha", "Sua nova senha é: " . $novasenha)){
    $sql_code = "UPDATE usuario SET senha = '$nscriptgrofada' WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
 }
}
}
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="POST" action="">
<input value = "<?php echo $_POST ['email']; ?>" placeholder="seu e-mail" name="email" type="text">
<input type="submit">
</form>
</body> </html>