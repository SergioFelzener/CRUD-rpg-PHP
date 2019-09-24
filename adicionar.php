<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>CRUD</title>
</head>
<body>
<div class="container" id="tamanhoContainer">
    <h4>Formulário de cadastro de Personagens RPG</h4>
        <form action="inserir.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="nome">Nome do Personagem</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome do Personagem" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                    <select class="form-control" name="categoria" autocomplete="off" required>

                        <?php
                                // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                // listando a tabela categoria os nomes de categorias criados na base de dados e listando em ordem alfabetica.
                                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                                $buscar = mysqli_query($conexao, $sql);

                                // buscando valores dentro do banco de dados que e nossa variavel buscar acima 
                        
                                // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array = mysqli_fetch_array($buscar)) {
                                   //listando id_categoria
                                    $id_categoria = $array ['id_categoria'];
                                    $nome_categoria = $array ['nome_categoria'];
  
                        ?>
                             <option><?php echo $nome_categoria ?></option>
                        <?php
                        // fechando while depois do option para tal e necessario abrir novamente o php 

                                }
                        ?>  
                    </select>
            </div>
            <div class="form-group">
                <label>Armas</label>
                    <select class="form-control" name="armas" autocomplete="off" required>

                        <?php
                                // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                // listando a tabela categoria os nomes de categorias criados na base de dados e listando em ordem alfabetica.
                                $sql = "SELECT * FROM armas order by nome_arma ASC";
                                $buscar = mysqli_query($conexao, $sql);

                                // buscando valores dentro do banco de dados que e nossa variavel buscar acima 
                        
                                // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array = mysqli_fetch_array($buscar)) {
                                   //listando id_categoria
                                    $id_armas = $array ['id_armas'];
                                    $nome_arma = $array ['nome_arma'];
  
                        ?>
                             <option><?php echo $nome_arma ?></option>
                        <?php
                        // fechando while depois do option para tal e necessario abrir novamente o php 

                                }
                        ?>  
                    </select>
            </div>
            <div class="form-group">
                <label>Itens</label>
                    <select class="form-control" name="itens" autocomplete="off" required>

                        <?php
                                // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                // listando a tabela categoria os nomes de categorias criados na base de dados e listando em ordem alfabetica.
                                $sql = "SELECT * FROM itens order by nome_itens ASC";
                                $buscar = mysqli_query($conexao, $sql);

                                // buscando valores dentro do banco de dados que e nossa variavel buscar acima 
                        
                                // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array = mysqli_fetch_array($buscar)) {
                                   //listando id_categoria
                                    $id_itens = $array ['id_itens'];
                                    $nome_itens = $array ['nome_itens'];
  
                        ?>
                             <option><?php echo $nome_itens ?></option>
                        <?php
                        // fechando while depois do option para tal e necessario abrir novamente o php 

                                }
                        ?>  
                    </select>
            </div>
            <div class="form-group">
                <label>Tesouros</label>
                <select class="form-control" name="tesouro" autocomplete="off" required>
                <?php
                                // abrir php dentro do select para buscar as categorias dentro do banco de dados 
                                include 'conexao.php';
                                // listando a tabela fornecedor os nomes de fornecedores criados na base de dados e listando em ordem alfabetica.
                                $sql2 = "SELECT * FROM tesouro order by nome_tesouro ASC";
                                $buscar2 = mysqli_query($conexao, $sql2);

                                // buscando valores dentro do banco de dados que e nossa variavel buscar acima 
                        
                                // fecha a {} depois do option que vai abrir na tela mostrando todas as categorias 
                                while ($array2 = mysqli_fetch_array($buscar2)) {
                                   //listando id_categoria
                                    $id_tesouro = $array2 ['id_tesouro'];
                                    $nome_tesouro = $array2 ['nome_tesouro'];
  
                        ?>
                             <option><?php echo $nome_tesouro ?></option>
                        <?php
                        // fechando while depois do option para tal e necessario abrir novamente o php 

                                }
                        ?>  
                </select>
            </div>
            <div class="form-group">
                <label>Power</label>
                <input type="number" class="form-control" name="power" placeholder="Força do personagem" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Destreza</label>
                <input type="number" class="form-control" name="destreza" placeholder="Nível de destreza" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Inteligência</label>
                <input type="number" class="form-control" name="inteli" placeholder="Nível de inteligência" autocomplete="off" required>
            </div>
            
                                <input type="file" name="img"/>
                                
<br>
            <div id="btnCadastro">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
                <button type="submit" id="botao" class="btn btn-sm float-right">cadastrar</button>
            </div>

        </form>




    </div>
                         



<script type="texte/javascript" src="js/bootstrap.js"></script>
</body>
</html>