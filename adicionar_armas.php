<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adicionar_armas.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/preview_img.js"></script>
    <script type="texte/javascript" src="js/bootstrap.js"></script>
    <title>Adicionar Armas</title>
</head>
<body>
    <h1 id="titulo"> Cadastro de Armas</h1>
    <div class="container">
        <div class="row col-lg-12">
            <form class="form-style" action="_inserir_armas.php" method="POST">
                <label for="armas">Arma</label>
                <div class="form-group">
                    <input type="text" name="armas" class="form-control"  placeholder="Digite o nome da Arma" autocomplete="off" required="required">
                </div>
                <div class="form-group">
                    <label for="img">Imagem</label>
                <div>
                    <input type="file"  class="form-control-file" name="img" id="upload" placeholder="Imagem" autocomplete="off">
                    <img id="imagem" style="width: 150px">
                </div><br>
                <div style="text-align: right">
                    <a href="menu.php" role="button" class="btn btn-sm btn-primary float-left">voltar</a>
                    <button type="submit" id="botao" class="btn btn-sm">cadastrar</button>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>