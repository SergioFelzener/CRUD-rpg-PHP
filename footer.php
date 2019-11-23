<style>
  #descerro {
    color: white;
    background-color: red;
    -webkit-box-shadow: 11px 10px 21px 5px #ffffff;
    box-shadow: 9px 8px 16px 5px #ffffff;
    border-radius: 5px 5px 5px 5px;
    padding-left: 8%;
    padding-right: 8%;
    font-size: 12px;
    margin-top: 2%;
    margin-bottom: 2%;


  }

  #ok {
    color: white;
    background-color: green;
    -webkit-box-shadow: 11px 10px 21px 5px #ffffff;
    box-shadow: 9px 8px 16px 5px #ffffff;
    border-radius: 5px 5px 5px 5px;
    padding-left: 8%;
    padding-right: 8%;
    font-size: 12px;
    margin-top: 2%;
    margin-bottom: 2%;


  }

  #textarea {
    text-align: left;

  }
</style>
<div class="mb-3 float-right" style="max-width: 200px; margin-bottom: 10px; margin-right: 10px;">
  <form method="POST" action="erro.php" id="formErro" style="display:none;">

    <div class="form-group">
      <span id="descerro" style="color:white;" for="formErro">Descreva o erro do Sistema</span>
      <span id="ok" style="color:white; margin-top: 20px; display: none;" for="formErro">Erro enviado com sucesso</span>
      <textarea id="erro" class="form-control" rows="2" min="10" max="999"></textarea>
      <input for="erro" type="submit" id="submeter" value="Enviar" class="btn btn-success mt-2 btn-sm">
    </div>

  </form>
</div>
<footer class="py-3 bg-dark text-white-50">
  <div>
    <small>Copyright &copy; The Warriors</small>
    <a href="https://www.thewarriors.com">The Warriors Corporation</a>
    <p>Todos os direitos reservados SENAC<a class="text-green ml-2" href="https://www.thewarriors.com" target="_blank">PI 2</a>(CRUD)</p>
  </div>
  <div>
    <small>Reportar erro no sistema</small>
    <button id="report" type="button" class="btn btn-danger btn-sm mb-3 ml-3" style="margin-right: 2%;" onclick="formErro('formErro')">
      Reportar
    </button>
  </div>
</footer>
<script>
  function formErro() {
    var display = document.getElementById("formErro").style.display;
    if (display == "none")
      document.getElementById("formErro").style.display = 'block';
    else
      document.getElementById("formErro").style.display = 'none';
  }
</script>
<script>
  document.getElementById("submeter").onclick = function(event) {
    event.preventDefault();
    let ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
      if (ajax.readyState == 4 && ajax.status == 200) {
        //alert(ajax.responseText);
        if (ajax.responseText == 'SUCESSO') {
          var desaparece = document.getElementById("descerro");
          desaparece.style.display = "none";
          var aparece = document.getElementById("ok");
          aparece.style.display = "block";
          var encerraForm = document.getElementById("erro");
          encerraForm.style.display = "none";
          var encerraButton = document.getElementById("submeter");
          encerraButton.style.display = "none";

        }

      }
    }
    var erro = document.getElementById("erro").value;
    var parametros = "erro=" + encodeURIComponent(erro);

    ajax.open("POST", "erro.php");
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    ajax.send(parametros);



  }
</script>