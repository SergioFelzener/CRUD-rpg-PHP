<?php
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de Usuário Master</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="cadastroStyle.css">
  
  
</head>
<body>
 
<div>
<div class="container">
    <div class="col-md-12" >
        <div id="logbox">
            <form id="signup" method="POST" action="cadastrar.php">
                <h1>Cadastro de Usuário MASTER</h1>
                    <?php
                        if(isset($_SESSION['status_cadastro'])):
                    ?>
                                <div class="notificacao">
                                    <h5>Cadastro Efetuado</h5>
                                    <h5>Faca seu login informando usuário e senha</h5> <a href="index.php">AQUI</a></p>
                                </div>
                                <?php
                        endif;
                                    if(isset($_SESSION['status_cadastro'])){
                                       unset($_SESSION['status_cadastro']);
                                    }
                                ?>
                    <?php            // : usando como {} e finalizando com endif
                        if (isset($_SESSION['usuario_existe'])):
                    ?>
                            <div>
                                <p>O usuário já existe</p>
                                <?php
                        endif;
                                    if(isset($_SESSION['usuario_existe'])){
                                       unset($_SESSION['usuario_existe']);
                                    }
                                ?>
                    <div class="form-group">
                        <label style="color:#ffffff;">Nome</label>
                        <input name="nome" class="form-control" type="text" placeholder="Nome" required="required" class="input pass" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label style="color:#ffffff;">Usuário</label>
                        <input name="usuario" class="form-control" type="text" placeholder="Usuário" required="required" class="input pass" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label style="color:#ffffff;">E-mail@</label>
                        <input name="email" class="form-control" type="email" placeholder="Usuário" required="required" class="input pass" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label style="color:#ffffff;">Senha</label>
                        <input name="senha" class="form-control" id="txtsenha" type="password" placeholder="Senha" required="required" class="input pass" autocomplete="off"/>
                    </div>
                    <div class="form-group"> 
                        <label style="color:#ffffff;">Repetir Senha</label>   
                        <input name="repetirsenha" class="form-control" type="password" placeholder=" Repetir Senha" required="required" class="input pass" autocomplete="off" oninput="validaSenha(this)" />
                        <small id="texto"> <center>precisa ser igual a senha digitada acima</center></small>
                    </div>
                    <div class="form-gropu">
                        <label style="color:#ffffff;">Nivel de Acesso</label>
                        <select class="form-control" name="nivel">
                            
                                <option value="1">Administrador</option>
                                <option value="2">Funcionário</option>
                                <option value="3">Conferente</option>
   
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Criar Conta" class="inputButton btn btn-primary btn-sm"/>
                    </div>
                    <div>
                    <a href="index.php" role="button" class="btn btn-sm btn-warning">voltar</a>
                     </div>
                    <!-- configurando nivel de ususario para acesso ao banco de dados -->
                   <!-- <div class="form-gropu">
                        <label style="color:#fffff;">Nivel de Acesso</label>
                        <select class="form-control" name="nivelusuario">
                            
                                <option value="1">Administrador</option>
                                <option value="2">Funcionário</option>
                                <option value="3">Conferente</option>
                             
                            
                        </select>
                                </div>-->
            </form>
        </div>
    </div>
    <script>
        // validando senha ... conferindo se os dois campos senha foram digitados identicos 
        // vai buscar o valor do txtsenha e comparar com o repetir senha 
        function validaSenha (input) {
            if (input.value != document.getElementById('txtsenha').value){
                input.setCustomValidity('Senha não confere com a digitada anteriormente');
            }
            else {
                input.setCustomValidity('');
            }
        }
    </script>
  


</div>
</div>

</body>
</html>