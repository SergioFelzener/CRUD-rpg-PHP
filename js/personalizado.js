function senhaForca(){
    var senha = document.getElementById('txtsenha').value;
    var forca = 0;
    /* IMPRIMIR A SENHA NA TELA 
    document.getElementById("impSenha").innerHTML ="senha : " + senha;*/

    if ((senha.length >= 4) && (senha.length <= 7)){
        forca += 10;
    }else if (senha.length > 7){
        forca += 25;
    }
    if((senha.length >= 5) && (senha.match(/[a-z]+/))){
        forca += 10; 
    }

    if((senha.length >= 6) && (senha.match(/[A-Z]+/))){
        forca += 20; 
    }

    if((senha.length >= 7) && (senha.match(/[^a-zA-Z0-9]+/))){
        forca += 25; 
    }

    mostrarForca(forca);

}

function mostrarForca(forca){
    /* IMPRIMIR A FORÇA NA TELA */
    document.getElementById("impForcaSenha").innerHTML = "Força :" + forca; 

    if (forca < 30){
        document.getElementById("erroSenhaForca").innerHTML = '<div class="progress"><div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';

    }else if ((forca >= 30) && (forca < 50)){
        document.getElementById("erroSenhaForca").innerHTML = '<div class="progress"><div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>';

    }else if ((forca >= 50) && (forca < 70)){
        document.getElementById("erroSenhaForca").innerHTML = '<div class="progress"><div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div></div>';

    }
    else if ((forca >= 70) && (forca < 100)){
        document.getElementById("erroSenhaForca").innerHTML = '<div class="progress"><div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>';

    }
}