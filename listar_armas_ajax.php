<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/inserir_itens.css">
  <script type="texte/javascript" src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/confirm_delete.js"></script>
  <script src="https://kit.fontawesome.com/04d8502c9f.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
  <script src="js/sidenav.js"></script>
  <title>Listar Armas</title>
</head>
<style>
  body {
    background-image: url(img/fmred2.jpeg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #464646;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: 100%;
    color: #ffffff;
  }
</style>

<body>
  <header>
    <nav>
      <?php include("painel.php"); ?>
    </nav>
    <h1 id="titulo">Lista de Armas</h1>
  </header>
  <main>
    <div class="container">

      <table id="tabela" class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#id_armas</th>
            <th scope="col">Nome Arma</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>


      </table>
      <div>
        <a href="menu.php" role="button" class="btn btn-sm btn-primary float-right">voltar</a>
      </div>
  </main>
  <footer class="fixarfooter">
    <?php include 'footer.php'; ?>
  </footer>
</body>
<script>
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var vetor = JSON.parse(this.responseText);

      var table = document.getElementById('tabela');

      for (var ncount_linha = 0; ncount_linha < Object.keys(vetor).length; ncount_linha++) {

        var tr = document.createElement('tr');
        table.appendChild(tr);

        Object.keys(vetor[ncount_linha]).forEach(function(value) {
          var valor_linha = vetor[ncount_linha][value];

          codigo_botao = vetor[ncount_linha]['id_armas'];

          var td = document.createElement('td');
          td.innerHTML = valor_linha;
          tr.appendChild(td);
        });

        // href codigo_botao
        // tr.appendChild(bt1);




        // tr.appendChild(bt2);

        // Adicionando os botões da grade na linha
      }
    }
  }
  ajax.open("GET", "listar_armas ajax.php");
  ajax.send();
</script>

</html>