function validaSenha (input) {
    if (input.value != document.getElementById('txtsenha').value){
        input.setCustomValidity('Senha não confere com a digitada anteriormente');
    }
    else {
        input.setCustomValidity('');
    }
}