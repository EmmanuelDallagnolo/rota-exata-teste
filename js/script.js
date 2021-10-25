$('#form_cadastro').submit(function() {
    if (!validaCampo("nome")) {
        alert("Preencha o campo nome!");
        return false
    }
    if (!validaCampo("email")) {
        alert("Preencha o campo e-mail!");
        return false;
    }
    if (!validaCampo("senha")) {
        alert("Preencha o campo senha!");
        return false;
    }
    if (!validaCampo("curso")) {
        alert("Preencha o campo curso!");
        return false;
    }
    if (!validaCampo("observacao")) {
        alert("Preencha o campo observação!");
        return false;
    }
    if (!$('#termos').is(':checked')) {
        alert("Aceite os termos de uso!");
        return false;
    }
    if ($('input[name=sexo]:checked').length == 0) {
        alert("Preencha o campo sexo!");
        return false;
    }

    var textoConfirmar = "Nome: " + $('#nome').val() +
        "\nE-mail: " + $('#email').val() +
        "\nSenha: " + $('#senha').val() +
        "\nCurso: " + $('#curso').val() +
        "\nObservação: " + $('#observacao').val() +
        "\nSexo: " + $('input[name=sexo]:checked').val() +
        "\nConfirmar informações?";

    if (!confirm(textoConfirmar)) {
        return false;
    }

    return true;
});

function validaCampo(campo) {
    if ($('#' + campo).val() == "") {
        return false;
    }

    return true;
}