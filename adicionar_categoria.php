<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Adicionar Categoria</title>
</head>
<body>
    <div class="container" style="width: 500px">
    <h4> Cadastro de Categoria</h4>
        <form action="_inserir_categoria.php" method="POST">
            <label>Categoria</label>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control"  placeholder="Digite o nome da categoria" autocomplete="off" required="required">
            </div>
            <div style="text-align: right">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">voltar</a>
                <button type="submit" id="botao" class="btn btn-sm">cadastrar</button>
            </div>
            

        </form>
    </div>





<script type="texte/javascript" src="js/bootstrap.js"></script>
    
</body>
</html>