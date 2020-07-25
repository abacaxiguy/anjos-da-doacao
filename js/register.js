let erro = 0;

function criardiv() {
    let div = document.createElement("DIV");
    div.classList.add("alert");
    div.classList.add("alert-success");

    let texto = document.createTextNode("Você se cadastrou com sucesso!");
    div.appendChild(texto);
    container = document.getElementById("container");
    h2 = document.getElementById("h2");
    container.insertBefore(div, h2);
    document.getElementsByTagName("html")[0].scrollIntoView();
}

function throw_error(id, error) {
    input = document.getElementById(id);
    input.classList.add("is-invalid");
    p = document.getElementById(`error_${id}`);
    p.innerHTML = "<strong>" + error + "</strong>";
    input.scrollIntoView();
}

function success(id) {
    input = document.getElementById(id);
    input.classList.add("is-valid");
}

function valida_senhas(senha) {
    if (senha.value.length < 6) {
        throw_error(senha.id, "Senha tem que ter no mínimo 6 letras");
        return false;
    }
    // success(senha.id) # se as senhas não forem iguais?
    return true;
}

function valida_cpf(cpf) {
    cpf = cpf.replace(/[^0-9]/g, ""); // REGEX - tira tudo q n for digitos

    if (!cpf || cpf.length < 11) {
        throw_error("id_cpf", "Cpf inválido.");
        return false;
    }

    // Elimina CPFs invalidos conhecidos

    if (
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999"
    ) {
        throw_error("id_cpf", "Cpf inválido.");
        return false;
    }

    // Valida 1º digito

    add = 0;

    for (i = 0; i < 9; i++) {
        add += parseInt(cpf[i]) * (10 - i);
    }

    reverso = 11 - (add % 11);

    if (reverso == 10 || reverso == 11) {
        reverso = 0;
    }

    if (reverso != parseInt(cpf[9])) {
        throw_error("id_cpf", "Cpf inválido.");
        return false;
    }

    // Valida 2º digito

    add = 0;

    for (i = 0; i < 10; i++) {
        add += parseInt(cpf[i]) * (11 - i);
    }

    reverso = 11 - (add % 11);

    if (reverso == 10 || reverso == 11) {
        reverso = 0;
    }

    if (reverso != parseInt(cpf[10])) {
        throw_error("id_cpf", "Cpf inválido.");
        return false;
    }
    success("id_cpf");
    return true;
}

function valida_username(username) {
    if (username.value.length < 6) {
        throw_error(
            "id_username",
            "Usuário tem que ter no mínimo 6 caracteres."
        );
        return false;
    }
    if (username.value.match(/[^a-z0-9@_\.-]/gi)) {
        throw_error(
            "id_username",
            "Usuário inválido. Use apenas os caracteres indicados acima."
        );
        return false;
    }
    success(username.id);
    return true;
}

function valida_data(data) {
    data = new Date(data);
    ano = data.getFullYear();
    atual = new Date();
    ano_atual = atual.getFullYear();

    if (!data.getDate() || !data.getMonth() || !ano) {
        throw_error("id_birth_date", "Data inválida!");
        return false;
    }

    if (ano > ano_atual) {
        throw_error("id_birth_date", "Você é do FUTURO?");
        return false;
    }
    if (ano < ano_atual - 120) {
        throw_error(
            "id_birth_date",
            'Você é a <a target="_blank" href="https://pt.wikipedia.org/wiki/Jeanne_Calment">Jeanne Calment</a>?'
        );
        return false;
    }

    success("id_birth_date");
    return true;
}

function valida_email(email) {
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g.test(email.value)) {
        throw_error(email.id, "E-mail inválido");
        return false;
    }
    success(email.id);
    return true;
}

function limpa_input(input) {
    input.classList.remove("is-invalid");
    input.classList.remove("is-valid");
}

(function () {
    const radios = document.querySelectorAll("input[name='register-option']"),
        formUser = document.querySelector(".form-user"),
        formPonto = document.querySelector(".form-ponto");

    radios.forEach((radio) => {
        radio.addEventListener("change", (e) => {
            // user ||| ponto
            if (radio.value == "user") {
                formPonto.classList.add("hide");
                formUser.classList.remove("hide");
            } else {
                formUser.classList.add("hide");
                formPonto.classList.remove("hide");
            }
        });
    });
})();
