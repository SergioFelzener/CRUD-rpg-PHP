function validaCamposSomenteNumero() {
    var inputs = document.getElementsByClassName("somente-numero");
    for (var i = 0; i < inputs.length; ++i) {
        var input = inputs[i];  
        if (input.value !== "") {
            if (isNaN(input.value)) {
                alert("Preencha somente número!");
                return;
            }
        }               
    }
}