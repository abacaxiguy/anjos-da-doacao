<?php
session_start();
if (isset($_SESSION['id_conta'])) {
    header('location: catalogo.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="./css/style_index.css" />
    <link rel="stylesheet" href="./css/contrast.css" />
    <link rel="stylesheet" href="./css/acessibilidade.css" />
    <link rel="stylesheet" href="./css/modal.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="./img/logoImg2.png" />
    <title>
        Anjos da Doação - Uma rede colaborativa promovendo a acessibilidade.
    </title>
</head>

<body>
    <div class="barra-acessibilidade">
        <div class="container">
            <ul>
                <li class="ba-item-left">
                    <a class="ba-link" accesskey="1" href="#logo">Ir para conteudo [1]</a>
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

    <div class="bg-azul">
        <nav class="navbar navBar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logoImg" src="./img/logoImg2.png" alt="Logo" title="Logo" />
                    <img src="./img/logoTexto2.png" class="imgAparece" alt="Logo" title="Logo" />
                </a>
                <button onclick="botaBg()" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="navbar-collapse collapse div-nav" id="navbar">
                    <ul class="navbar-nav ul-editavel mt-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php"><i class="fas fa-home mr-2"></i>Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./catalogo.php"><i class="fas fa-shopping-cart mr-2"></i>Catálogo</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./faq.php"><i class="fas fa-question mr-2"></i>FAQ</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./login.php"><i class="fas fa-sign-in-alt mr-1"></i>
                                Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container inicio">
            <div class="row">
                <div class="col-9 mt-5">
                    <div class="mt-5">
                        <img id="logo" class="logoTexto mt-5" src="./img/logoTexto2.png" alt="Logo" title="Logo" />
                        <h1 class="largeFont mt-4 branco">
                            Uma rede colaborativa promovendo a inclusão e
                            reabilitação.
                        </h1>
                        <p class="smallFont branco mt-3 mb-4">
                            Centenas de pontos de coleta ao redor do país,
                            selecione seu estado para ver os pontos mais
                            próximos de você e torne-se um anjo!
                        </p>
                        <a href="./catalogo.php" class="mb-5 btn-find btn-gradient btn btn-block">
                            Encontrar
                        </a>
                    </div>
                </div>
            </div>

            <!-- botao -->
            <div class="fab sombra">
                <a href="login.php">
                    <i class="fa fa-user" aria-hidden="true"> </i>
                </a>
            </div>
            <!-- botao -->
        </div>
    </div>

    <main>
        <section>
            <div class="container-fluid">
                <div id="sobre" class="divisor bg-1 img_paralax"></div>
            </div>
        </section>

        <div>
            <div class="bg-azul branco">
                <div class="container pt-5 pb-5">
                    <h1 class="quemSomosTitulo largeFont pt-5 sombraTexto">
                        Sobre
                    </h1>
                    <div class="wrap-right">
                        <div class="quemSomosTexto smallFont pt-3 pb-5">
                            Sabendo-se que 6,2% da população brasileira
                            possui algum tipo de deficiência seja ela
                            auditiva, visual, motora ou intelectual. O
                            projeto Anjos da Doação busca promover a cultura
                            da solidariedade, tendo como objetivo principal
                            a melhoria da acessibilidade dos aparelhos de
                            locomobilidade e a inclusão social.
                        </div>
                        <img class="img-wrap-right" src="./img/undraw_about.svg" alt="Cadeirante olhando para a tela" title="Cadeirante olhando para a tela" />
                    </div>
                </div>
            </div>
        </div>
        <!--conteudo Quem somos-->

        <section>
            <div class="container-fluid">
                <div id="func" class="divisor bg-2 img_paralax"></div>
            </div>
        </section>

        <div>
            <div class="bg-verde branco">
                <div class="pt-5 pb-5 container">
                    <h1 class="container comoFuncionaTitulo largeFont sombraTexto pr-5 pt-5">
                        Como Funciona
                    </h1>
                    <div class="mt-5 mb-5 fluxograma "></div>
                    <h3>Ficou com dúvidas? Tire-as <a class="branco faq-link" href="./faq.php">aqui!</a></h3>
                </div>
            </div>
        </div>

        <section>
            <div class="container-fluid">
                <div id="qm" class="bg-3 img_paralax divisor"></div>
            </div>
        </section>

        <!--conteudo Como funciona-->

        <div>
            <div class="bg-azul branco">
                <div class="container pt-5 pb-5">
                    <h1 class="quemSomosTitulo largeFont pt-5 sombraTexto">
                        Quem Somos
                    </h1>
                    <div class="wrap-right">
                        <div class="quemSomosTexto smallFont pt-3 pb-5">
                            Anjos da Doação é uma rede colaborativa que
                            possibilita a doação, troca ou empréstimo de
                            próteses ou órteses para pessoas com os mais
                            variados tipos de deficiência, tendo o intuito
                            de permitir que pessoas de baixa renda possam
                            ter acesso a esses apetrechos de forma gratuita
                            e permitindo a pessoas que tenham um maior poder
                            aquisitivo realizar doações de novos produtos em
                            estabelecimentos parceiros da plataforma
                        </div>
                        <img class="img-wrap-right" src="./img/undraw_team.svg" alt="Quatro pessoas juntas, uma delas segurando um papel, e um cachorro." title="Quatro pessoas juntas, uma delas segurando um papel, e um cachorro." />
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container-fluid">
                <div class="bg-4 img_paralax divisor"></div>
            </div>
        </section>
    </main>

    <footer class="pt-5 pb-3 bg-azul" id="footer">
        <p class="text-center justify-content-center container">
            <a href="">Termos de Serviço</a> |
            <a href="">Política de Privacidade</a> <br />&copy; 2020 Anjos
            da Doação
        </p>
    </footer>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
</body>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget("https://vlibras.gov.br/app");
</script>
<script src="./js/index.js"></script>
<script src="./js/barra.js"></script>
<script src="https://kit.fontawesome.com/e7ebc2fc39.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./js/modal.js"></script>

</html>