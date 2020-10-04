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
        <a href="index.php" class="mb-5">
            <img src="./img/logo2.png" class="imgTopo" width="350" alt="Logo" title="Logo" />
        </a>
        <h2 id="h2">Cadastro</h2>
        <p class="fraseInicio">
            Não possui uma conta? Escolha uma opção abaixo para cadastrar!
        </p>
        <div class="container radio-container row mt-4">
            <div class="radio-wrapper col-4 d-flex">
                <input name="register-option" type="radio" id="user-radio" value="user" />
                <label for="user-radio">Usuário</label>
            </div>
            <div class="radio-wrapper col-4 d-flex">
                <input name="register-option" type="radio" id="ponto-radio" value="ponto" />
                <label for="ponto-radio">Ponto de coleta</label>
            </div>
        </div>

        <form class="form form-user hide" action="./controle.php?action=register" method="POST">
            <div class="form-row">
                <!-- first name -->
                <div id="div_id_first_name" class="form-group col-md-6">
                    <label for="id_first_name">
                        Primeiro nome
                    </label>

                    <div>
                        <input type="text" name="first_name" maxlength="30" class="textinput textInput form-control" id="id_first_name" required tabindex="1" />

                        <p id="error_id_first_name" class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- last name -->

                <div id="div_id_last_name" class="form-group col-md-6">
                    <label for="id_last_name">
                        Último nome
                    </label>

                    <div>
                        <input type="text" name="last_name" maxlength="150" class="textinput textInput form-control" id="id_last_name" required tabindex="2" />

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
                        <input onfocus="limpa_input(this)" onblur="valida_senhas(this)" type="password" name="password" class="textinput textInput form-control" id="id_password" required tabindex="3" />

                        <p id="error_id_password" class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- confirmar senha -->

                <div id="div_id_password2" class="form-group col-md-6">
                    <label for="id_password2">
                        Confirmar senha
                    </label>
                    <div>
                        <input onfocus="limpa_input(this)" onblur="valida_senhas(this)" type="password" name="cpassword" class="textinput textInput form-control" id="id_password2" required tabindex="4" />

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
                        <input type="text" name="phone" maxlength="14" class="textinput textInput form-control" required id="id_phone" tabindex="5" />

                        <p id="error_id_phone" class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- email -->
                <div id="div_id_email" class="form-group col-md-6">
                    <label for="id_email">
                        Endereço de email
                    </label>
                    <div>
                        <input onfocus="limpa_input(this)" onblur="valida_email(this)" type="email" name="email" maxlength="254" class="emailinput form-control" id="id_email" required tabindex="6" />

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
                        <input onfocus="limpa_input(this)" onblur="valida_data(this.value)" type="date" name="birth_date" maxlength="10" class="form-control" required id="id_birth_date" tabindex="7" />

                        <p id="error_id_birth_date" class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- cpf -->
                <div id="div_id_cpf" class="form-group col-md-6">
                    <label for="id_cpf" class="requiredField"> CPF </label>
                    <div>
                        <input onfocus="limpa_input(this)" onblur="valida_cpf(this.value)" type="text" name="id_cpf" minlength="11" class="textinput textInput form-control" required id="id_cpf" tabindex="8" />

                        <p id="error_id_cpf" class="invalid-feedback"></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block btn-lg mb-2 mt-4" tabindex="9">
                        Cadastre-se
                    </button>
                </div>
            </div>

            <div class="pb-3 mt-2 login d-flex justify-content-center">
                <a tabindex="10" href="login.php">Já tem uma conta?</a>
            </div>
        </form>

        <form class="form-ponto hide" onsubmit="return validar()">
            <div class="form-row">
                <!-- first name -->
                <div class="form-group col-md-6">
                    <label for="">
                        Nome da instituição
                    </label>

                    <div>
                        <input type="text" name="" maxlength="" class="textinput textInput form-control" required />

                        <p class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- last name -->

                <div class="form-group col-md-6">
                    <label for="">
                        Nome do representante
                    </label>

                    <div>
                        <input type="text" name="" maxlength="" class="textinput textInput form-control" required />

                        <p class="invalid-feedback"></p>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <!-- first name -->
                <div class="form-group col-md-6">
                    <label for="">
                        Estado/Cidade
                    </label>

                    <div>
                        <input type="text" name="" maxlength="" class="textinput textInput form-control" required />

                        <p class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- last name -->

                <div class="form-group col-md-6">
                    <label for="">
                        Endereço de email
                    </label>

                    <div>
                        <input type="text" name="" maxlength="" class="textinput textInput form-control" required />

                        <p class="invalid-feedback"></p>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <!-- first name -->
                <div class="form-group col-md-6">
                    <label for="">
                        Senha
                    </label>

                    <div>
                        <input type="text" name="" maxlength="" class="textinput textInput form-control" required />

                        <p class="invalid-feedback"></p>
                    </div>
                </div>

                <!-- last name -->

                <div class="form-group col-md-6">
                    <label for="">
                        Confirmar Senha
                    </label>

                    <div>
                        <input type="text" name="" maxlength="" class="textinput textInput form-control" required />

                        <p class="invalid-feedback"></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block btn-lg mb-2 mt-4" tabindex="9">
                        Cadastre-se
                    </button>
                </div>
            </div>

            <div class="pb-3 mt-2 login d-flex justify-content-center">
                <a tabindex="10" href="login.php">Já tem uma conta?</a>
            </div>
        </form>
    </div>

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
        });
    </script>

    <script src="./js/register.js"></script>
    <script src="./js/barra.js"></script>
</body>

</html>