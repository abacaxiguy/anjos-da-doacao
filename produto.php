<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação - <?= "Cadeira de rodas" ?></title>
    <link rel="icon" type="image/png" href="./img/logoImg2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/acessibilidade.css" />
    <link rel="stylesheet" href="./css/contrast.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/modal.css" />
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
            <?php
            if (!isset($_SESSION['authentication']) || !$_SESSION['authentication']) {
            ?>
                <a class="navbar-brand" href="./index.php" style="flex-grow: 0.1">
                    <img class="logo" src="./img/logo2.png" />
                </a>
            <?php
            } else {
            ?>
                <a class="navbar-brand" href="./catalogo.php" style="flex-grow: 0.1">
                    <img class="logo" src="./img/logo2.png" />
                </a>
            <?php
            }
            ?>
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

                <?php
                session_start();
                if (!isset($_SESSION['authentication']) || !$_SESSION['authentication']) {
                ?>

                    <a href="./login.php" style="flex-grow: 0.5">
                        <div class="login ml-5">
                            <div class="icon mr-2">
                                <i class="fas fa-user"></i>
                            </div>
                            <span>
                                Entre ou<br />
                                cadastre-se</span>
                        </div>
                    </a>

                <?php
                } else if ($_SESSION['authentication']) {
                ?>
                    <?php
                    if (!$_SESSION['ponto']) {
                    ?>
                        <a href="./perfil.php">
                            <div class="login ml-5">
                                <div class="icon mr-2">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span>
                                    <?= "João Lucas" ?>
                                </span>
                            </div>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="./admin/admin.php">
                            <div class="login ml-5">
                                <div class="icon mr-2">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span>
                                    <?= "ADEFAL" ?>
                                </span>
                            </div>
                        </a>
                    <?php
                    }
                    ?>


                <?php
                }
                ?>
            </div>
        </div>
    </nav>


    <main class="mt-5 mb-5">
        <div class="container">


            <div class="produto-wrapper">
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-12 d-flex justify-content-center">
                        <img class="img-thumbnail" style="border: none;" src="./img/cadeira.jpg" />
                    </div>
                    <div class="col-12 col-md-6 col-sm-12">
                        <h1>Cadeira de rodas dobrável</h1>
                        <p style="font-size: 1.4rem;">por <b>ADEFAL</b></p>
                        <p style="font-size: 1.3rem;">
                            Fabricada em aço carbono, com assento/encosto em
                            nylon e dobrável.
                        </p>
                        <a href="./perfil.php" class="btn btn-gradient btn-lg btn-block">
                            Entrar na fila
                        </a>
                    </div>
                </div>
            </div>

            <div class="more-wrapper">
                <h2 class="blue-font mb-4">
                    Mais produtos por <span>ADEFAL</span>
                </h2>
                <div class="carousel row mb-5">
                    <div class="card col-12 col-md-6 col-sm-6 col-lg-3">
                        <img class="card-img-top img-fluid" src="./img/cadeira.jpg" alt="Card image cap" />

                        <div class="card-body">
                            <h4 class="card-title">Cadeira de rodas</h4>
                            <p class="card-text">
                                <b>Doado por:</b> Adefal <br />
                                <b>Quantidade:</b> 15 unidades
                            </p>
                            <a href="./produto.php" class="btn btn-carousel btn-gradient">Solicitar</a>
                        </div>
                    </div>

                    <div class="card col-12 col-md-6 col-sm-6 col-lg-3">
                        <img class="card-img-top img-fluid" src="./img/bota.jpg" alt="Card image cap" />

                        <div class="card-body">
                            <h4 class="card-title">Bota Ortopedica</h4>
                            <p class="card-text">
                                <b>Doado por:</b> Adefal <br />
                                <b>Quantidade:</b> 15 unidades
                            </p>
                            <a href="./produto.php" class="btn btn-carousel btn-gradient">Solicitar</a>
                        </div>
                    </div>

                    <div class="card col-12 col-md-6 col-sm-6 col-lg-3">
                        <img class="card-img-top img-fluid" src="./img/muleta.jpg" alt="Card image cap" />

                        <div class="card-body">
                            <h4 class="card-title">Muleta</h4>
                            <p class="card-text">
                                <b>Doado por:</b> Adefal <br />
                                <b>Quantidade:</b> 15 unidades
                            </p>
                            <a href="./produto.php" class="btn btn-carousel btn-gradient">Solicitar</a>
                        </div>
                    </div>

                    <div class="card col-12 col-md-6 col-sm-6 col-lg-3">
                        <img class="card-img-top img-fluid" src="./img/cadeira.jpg" alt="Card image cap" />

                        <div class="card-body">
                            <h4 class="card-title">Cadeira de rodas</h4>
                            <p class="card-text">
                                <b>Doado por:</b> Adefal <br />
                                <b>Quantidade:</b> 15 unidades
                            </p>
                            <a href="./produto.php" class="btn btn-carousel btn-gradient">Solicitar</a>
                        </div>
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
        <a href="./faq.php">
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
<script src="./js/barra.js"></script>

</html>