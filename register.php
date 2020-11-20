<?php
session_start();
if (isset($_SESSION['id_conta'])) {
    header('location: catalogo.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Anjos da Doação - Cadastre-se</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style_register.css" />
    <link rel="shortcut icon" href="./img/logoImg2.png" />
    <link rel="stylesheet" href="./css/acessibilidade.css" />
    <link rel="stylesheet" href="./css/contrast.css" />
</head>

<body cz-shortcut-listen="true">
    <div class="barra-acessibilidade">
        <div class="container">
            <ul>
                <li class="ba-item-left">
                    <a class="ba-link" accesskey="1" href="#">Ir para conteúdo [1]</a>
                </li>
                <li class="ba-item-right">
                    <a class="ba-link" accesskey="9" href="#" onclick="window.toggleContrast(); return false;">Alto Contraste [9]</a>
                </li>
                <li class="ba-item-right">
                    <a class="ba-link decrease active" accesskey="8" href="#" onclick="return false">Diminuir Fonte [8]</a>
                </li>
                <li class="ba-item-right">
                    <a class="ba-link increase active" accesskey="7" href="#" onclick="return false">Aumentar Fonte [7]</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mt-5 mb-5" id="container">
        <div class="container">


            <a href="index.php" class="mb-5">
                <img src="./img/logo2.png" class="imgTopo" width="350" alt="Logo" title="Logo" />
            </a>
            <h2 id="h2">Cadastro</h2>
            <p class="fraseInicio">
                Não possui uma conta? Escolha uma opção abaixo para cadastrar!
            </p>
            <div class="select-container form-group mt-4">
                <select class="perfil-select custom-select">
                    <option selected value="u">Usuário</option>
                    <option value="p">Ponto de Coleta</option>
                    <option value="e">Empresa Parceira</option>
                </select>
            </div>

            <form class="form form-user" action="./controle.php?action=register_user" method="POST">
                <div class="form-row">
                    <!-- first name -->
                    <div id="div_id_first_name" class="form-group col-md-6">
                        <label for="id_first_name">
                            Primeiro nome
                        </label>

                        <div>
                            <input type="text" name="first_name" maxlength="30" class="textinput textInput form-control" id="id_first_name" required />

                            <p id="error_id_first_name" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- last name -->

                    <div id="div_id_last_name" class="form-group col-md-6">
                        <label for="id_last_name">
                            Último nome
                        </label>

                        <div>
                            <input type="text" name="last_name" maxlength="150" class="textinput textInput form-control" id="id_last_name" required />

                            <p id="error_id_last_name" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- password -->

                    <div id="div_id_password" class="form-group col-md-6">
                        <label for="id_password">
                            Senha
                        </label>
                        <div>
                            <input onfocus="limpa_input(this)" onblur="valida_senhas(this)" type="password" name="password" class="textinput textInput form-control" id="id_password" required />

                            <p id="error_id_password" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- confirmar senha -->

                    <div id="div_id_password2" class="form-group col-md-6">
                        <label for="id_password2">
                            Confirmar senha
                        </label>
                        <div>
                            <input onfocus="limpa_input(this)" onblur="valida_senhas(this)" type="password" name="cpassword" class="textinput textInput form-control" id="id_password2" required />

                            <p id="error_id_password2" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <!-- phone -->

                    <div id="div_id_phone" class="form-group col-md-6">
                        <label for="id_phone" class="requiredField">
                            Telefone
                        </label>

                        <div>
                            <input type="text" name="phone" maxlength="14" class="textinput textInput form-control" required id="id_phone" />

                            <p id="error_id_phone" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- email -->
                    <div id="div_id_email" class="form-group col-md-6">
                        <label for="id_email">
                            Endereço de email
                        </label>
                        <div>
                            <input onfocus="limpa_input(this)" onblur="valida_email(this)" type="email" name="email" maxlength="254" class="emailinput form-control" id="id_email" required />

                            <p id="error_id_email" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- data de nascimento -->
                    <div id="div_id_birth_date" class="form-group col-md-6">
                        <label for="id_birth_date" class="requiredField">
                            Data de Nascimento
                        </label>
                        <div>
                            <input onfocus="limpa_input(this)" onblur="valida_data(this.value)" type="date" name="birth_date" maxlength="10" class="form-control" required id="id_birth_date" />

                            <p id="error_id_birth_date" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- cpf -->
                    <div id="div_id_cpf" class="form-group col-md-6">
                        <label for="id_cpf" class="requiredField"> CPF </label>
                        <div>
                            <input onfocus="limpa_input(this)" onblur="valida_cpf(this.value)" type="text" name="id_cpf" minlength="11" class="textinput textInput form-control" required id="id_cpf" />

                            <p id="error_id_cpf" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block btn-lg mb-2 mt-4">
                            Cadastre-se
                        </button>
                    </div>
                </div>

                <div class="pb-3 mt-2 login d-flex justify-content-center">
                    <a href="login.php">Já tem uma conta?</a>
                </div>
            </form>

            <form class="form-ponto hide" action="./controle.php?action=register_ponto" method="POST">
                <div class="form-row">
                    <!-- name pd -->
                    <div id="div_id_nome_pd" class="form-group col-md-6">
                        <label for="id_nome_pd">
                            Nome da instituição
                        </label>

                        <div>
                            <input type="text" name="nome_pd" maxlength="30" class="textinput textInput form-control" id="id_nome_pd" required />

                            <p id="error_id_nome_pd" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- email -->

                    <div id="div_id_email_pd" class="form-group col-md-6">
                        <label for="id_email_pd">
                            Endereço de email
                        </label>
                        <div>
                            <input type="email" name="email_pd" maxlength="54" class="emailinput form-control" id="id_email_pd" required />

                            <p id="error_id_email_pd" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- telefone -->
                    <div id="div_id_phone_pd" class="form-group col-md-6">
                        <label for="id_phone_pd" class="requiredField">
                            Telefone
                        </label>

                        <div>
                            <input type="text" name="phone_pd" class="textinput textInput form-control" required id="id_phone_pd" />

                            <p id="error_id_phone_pd" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- cep -->
                    <div id="div_id_cep" class="form-group col-md-6">
                        <label for="id_cep" class="requiredField"> CEP </label>
                        <div>
                            <input type="text" name="cep" minlength="9" class="textinput textInput form-control" required id="id_cep" />

                            <p id="error_id_cep" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- password -->

                    <div id="div_id_password" class="form-group col-md-6">
                        <label for="id_password">
                            Senha
                        </label>
                        <div>
                            <input type="password" name="password_pd" class="textinput textInput form-control" id="id_password" required />

                            <p id="error_id_password_pd" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- confirm password -->

                    <div id="div_id_password2" class="form-group col-md-6">
                        <label for="id_password2">
                            Confirmar senha
                        </label>
                        <div>
                            <input type="password" name="cpassword_pd" class="textinput textInput form-control" id="id_password2" required />

                            <p id="error_id_cpassword_pd" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block btn-lg mb-2 mt-4">
                            Cadastre-se
                        </button>
                    </div>
                </div>

                <div class="pb-3 mt-2 login d-flex justify-content-center">
                    <a href="login.php">Já tem uma conta?</a>
                </div>
            </form>

            <form class="form-parceiro hide" action="./controle.php?action=register_parceiro" method="POST">
                <div class="form-row">
                    <!-- name pd -->
                    <div id="div_id_nome_pd" class="form-group col-md-6">
                        <label for="id_nome_pd">
                            Nome da empresa
                        </label>

                        <div>
                            <input type="text" name="nome_pd" maxlength="30" class="textinput textInput form-control" id="id_nome_pd" required />

                            <p id="error_id_nome_pd" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- email -->

                    <div id="div_id_email_pd" class="form-group col-md-6">
                        <label for="id_email_pd">
                            Endereço de email
                        </label>
                        <div>
                            <input onfocus="limpa_input(this)" onblur="valida_email(this)" type="email" name="email_pd" maxlength="54" class="emailinput form-control" id="id_email_pd" required />

                            <p id="error_id_email_pd" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- telefone -->
                    <div id="div_id_phone_pd" class="form-group col-md-6">
                        <label for="id_phone_pd" class="requiredField">
                            Telefone
                        </label>

                        <div>
                            <input type="text" name="phone_pd" maxlength="14" class="textinput textInput form-control" required id="id_phone_pd" />

                            <p id="error_id_phone_pd" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- cep -->
                    <div id="div_id_cep" class="form-group col-md-6">
                        <label for="id_cep" class="requiredField"> URL do site </label>
                        <div>
                            <input type="text" name="id_cep" minlength="11" maxlength="11" class="textinput textInput form-control" required id="id_cep" />

                            <p id="error_id_cep" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- password -->

                    <div id="div_id_password" class="form-group col-md-6">
                        <label for="id_password">
                            Senha
                        </label>
                        <div>
                            <input type="password" name="password" class="textinput textInput form-control" id="id_password" required />

                            <p id="error_id_password" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- confirm password -->

                    <div id="div_id_password2" class="form-group col-md-6">
                        <label for="id_password2">
                            Confirmar senha
                        </label>
                        <div>
                            <input type="password" name="cpassword" class="textinput textInput form-control" id="id_password2" required />

                            <p id="error_id_password2" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block btn-lg mb-2 mt-4">
                            Cadastre-se
                        </button>
                    </div>
                </div>

                <div class="pb-3 mt-2 login d-flex justify-content-center">
                    <a href="login.php">Já tem uma conta?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- TEMPORARIO -->
    <script>
        const select = document.querySelector(".perfil-select"),
            formUser = document.querySelector(".form-user"),
            formPonto = document.querySelector(".form-ponto"),
            formParceiro = document.querySelector(".form-parceiro");
        console.log(select);
        select.addEventListener("change", (e) => {
            if (e.target.value == 'u') {
                formUser.classList.remove('hide');
                formPonto.classList.add('hide');
                formParceiro.classList.add('hide');
            };
            if (e.target.value == 'p') {
                formUser.classList.add('hide');
                formPonto.classList.remove('hide');
                formParceiro.classList.add('hide');
            };
            if (e.target.value == 'e') {
                formUser.classList.add('hide');
                formPonto.classList.add('hide');
                formParceiro.classList.remove('hide');
            };
        });
    </script>
    <!-- TEMPORARIO -->

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget("https://vlibras.gov.br/app");
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#id_cpf").mask("000.000.000-00");
            $('#id_phone').mask('(00) 00000-0000');
            $('#id_phone_pd').mask('(00) 00000-0000');
            $('#id_phone_ep').mask('(00) 0000-0000');
            $("#id_cep").mask("00000-000");
        });
    </script>

    <script src="./js/register.js"></script>
    <script src="./js/barra.js"></script>
</body>

</html>