<?php
require 'autenticador_e.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação - Administrador do <?= $array['nome_empresa'] ?></title>
    <link rel="icon" type="image/png" href="../img/logoImg2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/acessibilidade.css" />
    <link rel="stylesheet" href="../css/contrast.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style_profile.css" />
</head>

<body>
    <div class="barra-acessibilidade">
        <div class="container">
            <ul>
                <li class="ba-item-left">
                    <a class="ba-link" accesskey="1" href="#search">Barra de pesquisa [1]</a>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="../catalogo.php" style="flex-grow: 0.1">
                <img class="logo" src="../img/logo2.png" />
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="navbar-collapse collapse div-nav" id="navbar">
                <form class="my-2 ml-2 my-lg-0 d-flex" style="flex-grow: 3">
                    <input class="search-input" type="search" placeholder="O que procura?" aria-label="Pesquisar" results="5" name="s" id="search" />

                    <button class="btn-search" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <a href="./parceiro.php">
                    <div class="login ml-5">
                        <div class="icon mr-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>
                            <?= $array['nome_empresa'] ?>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </nav>

    <main class="mt-5 mb-5 container">
        <div class="profile-name">
            <div class="name-wrapper">Olá,</div>
            <span class="name-span bold pr-2"><?= $array['nome_empresa'] ?></span>
            <span class="logoff bold">
                <form style="display:inline" action="../sair.php" method="get">
                    <button type="submit">
                        <i class="fas fa-power-off" title="Sair"></i>
                    </button>
                </form>
            </span>
        </div>
        <div class="profile-wrapper mt-5 mb-5">
            <nav class="profile-nav">
                <div class="nav-wrapper">
                    <a class="active" href="./parceiro_editar_perfil.php"><i class="fas fa-id-card"></i> Editar Perfil</a>
                    <a href="./admin_cadastrar.php"><i class="fas fa-archive"></i> Cadastrar
                        Equipamento</a>
                    <a href="./admin_equipamentos.php"><i class="fas fa-box-open"></i> Seus
                        Equipamentos</a>
                    <a href="./admin_solicitacoes.php"><i class="fas fa-receipt"></i> Solicitações</a>
                </div>
            </nav>

            <div class="profile-body">
                <div class="form-row">
                    <!-- name ep -->
                    <div id="div_id_nome_ep" class="form-group col-md-6">
                        <label for="id_nome_ep">
                            Nome da empresa
                        </label>

                        <div>
                            <input type="text" name="nome_ep" maxlength="30" class="textinput textInput form-control" id="id_nome_ep" required value="<?= $array['nome_empresa'] ?>" />

                            <p id="error_id_nome_ep" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- email -->

                    <div id="div_id_email_ep" class="form-group col-md-6">
                        <label for="id_email_ep">
                            Endereço de email
                        </label>
                        <div>
                            <input type="email" name="email_ep" maxlength="54" class="emailinput form-control" id="id_email_ep" required value="<?= $array['email_empresa'] ?>" />

                            <p id="error_id_email_ep" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- telefone -->
                    <div id="div_id_phone_ep" class="form-group col-md-6">
                        <label for="id_phone_ep" class="requiredField">
                            Telefone
                        </label>

                        <div>
                            <input type="text" name="phone_ep" maxlength="14" class="textinput textInput form-control" required id="id_phone_ep" value="<?= $array['telefone_empresa'] ?>" />

                            <p id="error_id_phone_ep" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- site -->
                    <div id="div_id_site" class="form-group col-md-6">
                        <label for="id_site" class="requiredField"> URL do site </label>
                        <div>
                            <input type="text" name="site_ep" class="textinput textInput form-control" required id="id_site" value="<?= $array['site_empresa'] ?>" />

                            <p id="error_id_site" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- password -->

                    <div id="div_id_password_ep" class="form-group col-md-6">
                        <label for="id_password_ep">
                            Senha
                        </label>
                        <div>
                            <input type="password" name="password_ep" class="textinput textInput form-control" id="id_password_ep" required />

                            <p id="error_id_password_ep" class="invalid-feedback"></p>
                        </div>
                    </div>

                    <!-- confirm password -->

                    <div id="div_id_password_ep2" class="form-group col-md-6">
                        <label for="id_password_ep2">
                            Confirmar senha
                        </label>
                        <div>
                            <input type="password" name="cpassword_ep" class="textinput textInput form-control" id="id_password_ep2" required />

                            <p id="error_id_password_ep2" class="invalid-feedback"></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <!-- image -->

                    <div id="div_id_image" class="form-group col">
                        <label for="id_image">
                            Imagem de perfil
                        </label>
                        <div>
                            <input type="file" name="image_ep" id="id_image" />

                            <p id="error_id_id_image" class="invalid-feedback"></p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-gradient btn-block btn-lg mb-2 mt-4">
                            Editar Informações
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <div class="faq-fab ">
        <a href="../faq.php">
            <button class="btn btn-gradient"><i class="fas fa-question-circle mr-1"></i> Ficou com alguma dúvida?</button>
        </a>
    </div>

    <footer class="pt-5 pb-3 bg-azul" id="footer">
        <p class="text-center justify-content-center container">
            <a href="">Termos de Serviço</a> |
            <a href="">Política de Privacidade</a> <br />&copy; 2020 Anjos
            da Doação
        </p>
    </footer>
</body>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget("https://vlibras.gov.br/app");
</script>
<script src="https://kit.fontawesome.com/e7ebc2fc39.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../js/barra.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#id_phone_ep').mask('(00) 00000-0000');
    });
</script>

</html>