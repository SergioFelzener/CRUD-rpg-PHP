<?php

    include 'conexao.php';

    $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adicionar_armas.css">
    <title>Editar Armas</title>
        
</head>
<body>
    <h1 id="titulo"> Editar Arma</h1>
    <div class="container">
        <div class="row col-lg-12">
            <form class="form-style" action="atualizar_armas.php" method="POST">
                <?php

                    $sql = "SELECT * FROM `armas` WHERE id_armas = $id";
                    $buscar = mysqli_query($conexao, $sql);
                        while ($array = mysqli_fetch_array($buscar)) {
                                        $id_armas = $array ['id_armas'];
                                        $nome_arma = $array ['nome_arma'];
                                

                ?>

                            
                            <div class="form-group">
                                <label>Id Arma</label>
                                <input type="text" class="form-control" name="id" value = "<?php echo $id_armas ?>" readonly>
                                <label>Nome da Arma</label>
                                <input type="text" class="form-control" name="nome_arma" value = "<?php echo $nome_arma ?>">   
                            </div>
                            <div class="form-group">
               
                            <div id="btnCadastro">
                                <a href="menu.php" role="button" class="btn btn-sm btn-primary float-left">voltar</a>
                                <button type="submit" id="botao" class="btn btn-sm">atualizar</button>
                            </div>
                <?php  } ?>

          
               
            
            </form>
        </div>
    </div>
    





<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>