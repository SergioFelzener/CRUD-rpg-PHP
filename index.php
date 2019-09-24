<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
    </script>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3><center>Login</center></h3>
               
                <?php
                    if (isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="erro">
                    <p id="msg">ERRO: Usuário ou Senha inválidos</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="card-body">
                    <!--Apontando para a pagina login PHP para fazer a validacoes de usuario e senha ACTION metodo POST -->
                    <form method="post" action="login.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="usuario" class="form-control" placeholder="username" required="required">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="senha" class="form-control" placeholder="password" required="required">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Lembrar
                        </div><br>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div><br>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Não tem uma conta?<a href="cadastro_novo.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>