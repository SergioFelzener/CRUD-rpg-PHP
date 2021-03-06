<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Usuário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript"></script>
    <script src="js/validasenha.js"></script>
    <!--<script src="js/forcasenha.js"></script>-->
    <script src="js/personalizado.js"></script>
</head>

<body>
    <main>
        <header>
            <div class="container">
                <div class="d-flex h-100">
                    <div id="cadastro" class="card">
                        <div class="card-header">

                            <form id="signup" method="POST" action="cadastrar_novo.php">
                                <h1>
                                    Cadastro de Usuário
                                </h1>
                                <?php
                                if (isset($_SESSION['status_cadastro'])) :
                                    ?>
                                    <div class="notificacao">
                                        <h5 style="margin-top:5px;">Cadastro Efetuado</h5>
                                        <h5>Aguardando Aprovação</h5>
                                        </p>
                                    </div>
                                <?php
                            endif;
                            if (isset($_SESSION['status_cadastro'])) {
                                unset($_SESSION['status_cadastro']);
                            }
                            ?>
                                <?php            // : usando como {} e finalizando com endif
                                if (isset($_SESSION['usuario_existe'])) :
                                    ?>
                                    <div>
                                        <p id="msg">O usuário já existe</p>
                                    <?php
                                endif;
                                if (isset($_SESSION['usuario_existe'])) {
                                    unset($_SESSION['usuario_existe']);
                                }
                                ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label style="color:#ffffff;">Nome</label>
                                            <input name="nome" class="form-control" type="text" placeholder="Nome" required="required" class="input pass" autocomplete="off" />
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#ffffff;">Usuário</label>
                                            <input name="usuario" class="form-control" type="text" placeholder="Usuário" required="required" class="input pass" autocomplete="off" />
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#ffffff;">E-mail@</label>
                                            <input name="email" class="form-control" type="email" placeholder="e-mail" required="required" class="input pass" autocomplete="off" />
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#ffffff;">Senha</label>
                                            <input name="senha" class="form-control" id="txtsenha" type="password" placeholder="Senha" required="required" class="input pass" autocomplete="off" onkeyup="senhaForca()" />

                                            <!-- <div id="impSenha" style="color:white;"></div>-->
                                            <div id="impForcaSenha" style="color:yellow; font-size:9px; float:right;"></div>

                                        </div>
                                        <div class="form-group">
                                            <div id="erroSenhaForca"></div>
                                        </div>

                                        <div id="mostrasenha"></div>
                                        <div class="form-group">
                                            <label style="color:#ffffff;">Repetir Senha</label>
                                            <input name="repetirsenha" class="form-control" type="password" placeholder=" Repetir Senha" required="required" class="input pass" autocomplete="off" oninput="validaSenha(this)" />
                                            <small id="texto">
                                                precisa ser igual a senha digitada acima
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <a href="index.php" role="button" class="btn btn-sm btn-primary float-left">voltar</a>
                                            <input type="submit" value="Criar Conta" class="inputButton btn btn-sm login_btn float-right" onclick="forcasenha()" />

                                        </div>

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
                </div>
            </div>
        </header>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>