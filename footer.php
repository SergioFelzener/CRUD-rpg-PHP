<style>
  #formErro {
    text-align: center;
    margin-bottom: -800px;
  }

  #erro {
    color: white;
    background-color: red;
    -webkit-box-shadow: 11px 10px 21px 5px #ffffff;
    box-shadow: 9px 8px 16px 5px #ffffff;
    border-radius: 5px 5px 5px 5px;
    padding-left: 22%;
    padding-right: 22%;
    font-size:15px;


  }

  #textarea {
    text-align: left;

  }
</style>
<div class="container mb-2" style="max-width: 360px; margin-bottom: 0px; margin-right: 0px;">
  <form>
    <div id="formErro" style="display:none;">
      <div class="form-group">
        <span id="erro" style="color:white;" for="formErro">Reportar ERRO do Sistema</span>
        <textarea id="textarea" class="form-control" id="formErro" rows="3" min="10" max="999"></textarea>
        <button type="button" class="btn btn-danger mt-2">
          Enviar
        </button>
      </div>
    </div>
  </form>
  </form>
</div>

<footer class="py-3 bg-dark text-white-50">
  <div>
    <button id="report" type="button" class="btn btn-danger float-right" style="margin-right: 2%;" onclick="formErro('formErro')">
      Reportar
    </button>
  </div>
  <div style="margin-left: 130px;">
    <small>Copyright &copy; The Warriors</small>
    <a href="https://www.thewarriors.com">The Warriors Corporation</a>
    <p>Todos os direitos reservados SENAC<a class="text-green ml-2" href="https://www.thewarriors.com" target="_blank">PI 2</a>(CRUD)</p>
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