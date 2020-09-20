<?php
require('./autenticador.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação</title>
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
            <a class="navbar-brand" href="../catalogo.php">
                <img class="logo" src="../img/logo2.png" />
            </a>

            <form class="my-2 ml-2 my-lg-0 d-flex">
                <input class="search-input" type="search" placeholder="O que procura?" aria-label="Pesquisar" results="5" name="s" id="search" />

                <button class="btn-search" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <a href="./admin.php">
                <div class="login ml-5">
                    <div class="icon mr-2">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>
                        ADEFAL
                    </span>
                </div>
            </a>
        </div>
    </nav>

    <main class="mt-5 mb-5 container">
        <div class="profile-name">
            <div class="name-wrapper">Olá,</div>
            <span class="name-span bold pr-2">ADEFAL</span>
            <span class="logoff bold">
                <form style="display:inline" action="../sair.php" method="get">
                    <button type="submit">
                        <i class="fas fa-power-off"></i>
                    </button>
                </form>
            </span>
        </div>
        <div class="profile-wrapper mt-5 mb-5">
            <nav class="profile-nav">
                <div class="nav-wrapper">
                    <a href="./admin_editar.php"><i class="fas fa-id-card"></i> Editar Perfil</a>
                    <a class="active" href="./admin_cadastrar.php"><i class="fas fa-archive"></i> Cadastrar
                        Equipamento</a>
                    <a href="./admin_equipamentos.php"><i class="fas fa-box-open"></i> Seus
                        Equipamentos</a>
                    <a href="./admin_solicitacoes.php"><i class="fas fa-receipt"></i> Solicitações</a>
                </div>
            </nav>

            <div style="min-height: 300px;" class="profile-body">
                <div class="col-12">
                    <div class="form-wrapper mt-2 container">
                        <form method="POST" action="./cadastrar_produto.php">
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Nome
                                </label>

                                <div>
                                    <input type="text" name="name" maxlength="30" class="textinput textInput form-control" id="id_first_name" required tabindex="1" />

                                    <p id="error_id_first_name" class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Descrição
                                </label>

                                <div>
                                    <textarea type="text" name="description" class="textinput textInput form-control" id="id_first_name" required tabindex="1"></textarea>

                                    <p id="error_id_first_name" class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div id="div_id_first_name" class="form-group col-12">
                                <label for="id_first_name">
                                    Quantidade
                                </label>

                                <div>
                                    <input type="number" name="quantity" class="textinput textInput form-control" id="id_first_name" required tabindex="1" />

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
                                <div class="row col-12 pt-4 mt-3 btn-profile">
                                    <button class="grid-button col-6 btn btn-gradient">
                                        Cadastrar
                                    </button>
                                    <button class="grid-button col-6 btn btn-block btn-gradient-caution">
                                        Cancelar
                                    </button>
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