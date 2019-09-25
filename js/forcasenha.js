function forcasenha(){
    var getsenha = document.getElementById ('txtsenha').value;

    if((getsenha.length < 8) || (getsenha == "")) {
        alert ("senha precisa ter mais de 8 caracteres");
        signup.senha.focus();
        return false;

    }



}