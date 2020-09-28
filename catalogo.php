<?php
session_start();

$file = fopen('./admin/products.txt', 'rb');

while (!feof($file)) {
    $products[] = fgets($file);
}

fclose($file);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação - Catálogo</title>
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

    <div class="modal fade" id="modalState" tabindex="-1" role="dialog" aria-labelledby="modalStateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalStateLabel">
                        Selecione seu estado:
                    </h5>
                </div>
                <div class="modal-body conteudo">
                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="acre" value="AC" />
                        <label for="acre">Acre</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="alagoas" value="AL" />
                        <label for="alagoas">Alagoas</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="amapá" value="AP" />
                        <label for="amapá">Amapá</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="amazonas" value="AM" />
                        <label for="amazonas">Amazonas</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="bahia" value="BA" />
                        <label for="bahia">Bahia</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="ceara" value="CE" />
                        <label for="ceara">Ceará</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="distritoFederal" value="DF" />
                        <label for="distritoFederal">Distrito Federal</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="espiritoSanto" value="ES" />
                        <label for="espiritoSanto">Espírito Santo</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="goias" value="GO" />
                        <label for="goias">Goiás</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="maranhao" value="MA" />
                        <label for="maranhao">Maranhão</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="matoGrosso" value="MT" />
                        <label for="matoGrosso">Mato Grosso</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="matoGrossoSul" value="MS" />
                        <label for="matoGrossoSul">Mato Grosso do Sul</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="minasGerais" value="MG" />
                        <label for="minasGerais">Minas Gerais</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="para" value="PA" />
                        <label for="para">Pará</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="paraiba" value="PB" />
                        <label for="paraiba">Paraíba</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="parana" value="PR" />
                        <label for="parana">Paraná</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="pernambuco" value="PE" />
                        <label for="pernambuco">Pernambuco</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="piaui" value="PI" />
                        <label for="piaui">Piauí</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="rioJaneiro" value="RJ" />
                        <label for="rioJaneiro">Rio de Janeiro</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="rioNorte" value="RN" />
                        <label for="rioNorte">Rio Grande do Norte</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="rioSul" value="RS" />
                        <label for="rioSul">Rio Grande do Sul</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="rondonia" value="RO" />
                        <label for="rondonia">Rondônia</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="roraima" value="RR" />
                        <label for="roraima">Roraima</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="santaCatarina" value="SC" />
                        <label for="santaCatarina">Santa Catarina</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="saoPaulo" value="SP" />
                        <label for="saoPaulo">São Paulo</label>
                    </div>

                    <div class="radio-wrapper">
                        <input name="state" type="radio" id="sergipe" value="SE" />
                        <label for="sergipe">Sergipe</label>
                    </div>

                    <div class="radio-wrapper">
                        <input type="radio" name="state" id="tocantins" value="TO" />
                        <label for="tocantins">Tocantins</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-gradient btn btn-modal">
                        Confirmar
                    </button>
                </div>
            </div>
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

    <div class="container mt-5">
        <h2 class="bold mapa">Descubra os pontos mais próximos à você!</h2>
        <div class="map-alerts mt-5"></div>
        <div class="mt-3" id="map"></div>
        <div class="blue-font selected-wrapper mt-5">
            Selecionado: <span class="map-selected"></span>
        </div>
    </div>

    <div class="container mt-5">
        <div class="section mt-5">
            <h2 class="bold blue-font mb-4">Novos equipamentos</h2>

            <div class="carousel row mb-5">
                <?php
                $just_four = 0;
                foreach ($products as $x) {
                    $just_four++;
                    if ($just_four > 5) {
                        break;
                    }
                    $product = explode('|', $x);
                    if (count($product) < 4) {
                        continue;
                    }


                ?>
                    <div class="card col-12 col-md-6 col-sm-6 col-lg-3">
                        <img class="card-img-top img-fluid" src="./img/cadeira.jpg" alt="Card image cap" />

                        <div class="card-body">
                            <h4 class="card-title"><?= $product[1]; ?></h4>
                            <p class="card-text">
                                <b>Doado por:</b> <?= $product[0]; ?> <br />
                                <b>Quantidade:</b> <?= $product[3]; ?> unidade(s)
                            </p>
                            <a href="./produto.php" class="btn btn-carousel btn-gradient">Solicitar</a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>

        <div class="section mt-5 mb-5">
            <h2 class="bold blue-font mb-4">Todos os equipamentos</h2>

            <div class="search-wrapper my-5 d-flex">
                <form class="d-flex" style="width: 50%;">
                    <input style="border: 3px solid rgb(61, 226, 157); " class="search-input" type="search" placeholder="O que procura?" aria-label="Pesquisar" results="5" name="s" />

                    <button class="btn-search" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <select class="custom-select">
                    <option value="mr">Mais Recentes</option>
                    <option value="ma">Mais Antigos</option>
                    <option value="ac">Ordem Alfabética Crescente</option>
                    <option value="ad">Ordem Alfabética Decrescente</option>
                </select>
            </div>

            <!-- <hr style="border-width:3px;border-color:rgb(61, 226, 157)"> -->

            <div class="carousel row mb-5">

                <?php
                $just_four = -1;
                foreach ($products as $x) {
                    $just_four++;

                    $product = explode('|', $x);
                    if (count($product) < 4) {
                        continue;
                    }


                ?>
                    <div class="card col-12 col-md-6 col-sm-6 col-lg-3">
                        <img class="card-img-top img-fluid" src="./img/cadeira.jpg" alt="Card image cap" />

                        <div class="card-body">
                            <h4 class="card-title"><?= $product[1]; ?></h4>
                            <p class="card-text">
                                <b>Doado por:</b> <?= $product[0]; ?> <br />
                                <b>Quantidade:</b> <?= $product[3]; ?> unidade(s)
                            </p>
                            <a href="./produto.php" class="btn btn-carousel btn-gradient">Solicitar</a>
                        </div>
                    </div>
                <?php
                    if ($just_four % 4 == 0 && $just_four != 0) {
                        echo '</div>
                        <div class="carousel row mb-5">';
                    }
                }
                ?>




            </div>
        </div>
    </div>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUlsao08ZAPQj6msRU8SblQd0bMgqza_s&callback=initMap"></script>
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<script src="https://kit.fontawesome.com/e7ebc2fc39.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./js/catalogo.js"></script>
<script src="./js/barra.js"></script>
<script src="./js/modal.js"></script>

</html>