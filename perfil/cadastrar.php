<?php
require('../autenticador.php');

$first_name = explode(' ', $array['nome_usuario'])[0];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-6" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação - Cadastrar Produto</title>
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

                <a href="../perfil.php">
                    <div class="login ml-5">
                        <div class="icon mr-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>
                            <?= $first_name ?>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <main class="mt-5 mb-5 container">
        <div class="profile-name">
            <div class="name-wrapper">Olá,</div>
            <span class="name-span bold pr-2"><?= $first_name ?></span>
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
                    <a href="./editar_perfil.php"><i class="fas fa-id-card"></i> Editar Perfil</a>
                    <a class="active" href="./cadastrar.php"><i class="fas fa-archive"></i> Cadastrar
                        Equipamento</a>
                    <a href="./seus_pedidos.php"><i class="fas fa-box-open"></i> Seus Pedidos</a>
                    <a href="./suas_doacoes.php"><i class="fas fa-clipboard-list"></i> Suas
                        Doações</a>
                </div>
            </nav>
            <div style="min-height: 300px;" class="profile-body">
                <div class="col-12">
                    <div class="form-wrapper mt-2">
                        <form action="">
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Nome
                                </label>

                                <div>
                                    <input type="text" name="first_name" maxlength="30" class="textinput textInput form-control" id="id_first_name" required tabindex="1" />

                                    <p id="error_id_first_name" class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Descrição
                                </label>

                                <div>
                                    <textarea type="text" name="first_name" class="textinput textInput form-control" id="id_first_name" required tabindex="1">
                                        </textarea>

                                    <p id="error_id_first_name" class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Quantidade
                                </label>

                                <div>
                                    <input type="number" name="first_name" class="textinput textInput form-control" id="id_first_name" required tabindex="1" />

                                    <p id="error_id_first_name" class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Imagem (Disabled for maintenance)
                                </label>

                                <!-- <div>
                                    <input type="file" name="first_name" class="fileInput" id="id_first_name" required tabindex="1" />

                                    <p id="error_id_first_name" class="invalid-feedback"></p>
                                </div> -->
                                <div class="row">
                                    <div class="col btn-edit-profile">
                                        <button type="submit" class="btn btn-gradient btn-lg btn-block mb-2 mt-4" tabindex="9">
                                            Cadastrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

</html>