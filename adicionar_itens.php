<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adicionar_itens.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/preview_img.js"></script>
    <script type="texte/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <script src="js/sidenav.js"></script>
    <title>Adicionar Itens</title>
    <script>
        function submitData() {
            $form = $('#frmItens');

            $.ajax({
                    method: "POST",
                    url: "_inserir_itens.php",
                    data: $form.serialize(),
                })
                .done(function(data) {
                    console.log(data);
                    let json = JSON.parse(data);
                    if (json.itens) {
                        alert("Item Cadastrado com sucesso");
                        //$erro = $('#success');
                        //$erro.css("display", "block");
                        //alert("Usuário logado com sucesso ... Bem vindo, " + json.nome);
                        $(location).attr('href', 'listar_itens.php');
                    } else {
                        alert("Erro: " + json.error);
                        // $erro = $('.erro');
                        // $msg = $('#msg');
                        //$msg.html("Erro: " + json.error);
                        // $erro.css("display","block");
                    }
                });
            return false;
        }
    </script>
</head>
<body>
    <header>
        <nav>
            <?php include("painel.php"); ?>
        </nav>
    </header>
    <h1 id="titulo"> Cadastro de Itens</h1>
    <main>
        <div class="container">
            <div class="row col-lg-12">
                <form id="frmItens" class="form-style" action="_inserir_itens.php" method="POST" onSubmit="return submitData();">
                    <label for="itens">Item</label>
                    <div class="form-group">
                        <input type="text" name="itens" class="form-control" placeholder="Digite o nome do Item" autocomplete="off">
                    </div>
                    <br>
                    <div style="text-align: right">
                        <a href="menu.php" role="button" class="btn btn-sm btn-primary float-left">voltar</a>
                        <button type="submit" id="botao" class="btn btn-sm">cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="fixarfooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>

