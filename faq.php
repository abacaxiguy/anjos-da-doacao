<!DOCTYPE html>
<html class="bg-azul" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="./css/style_index.css" />
    <link rel="stylesheet" href="./css/style_faq.css" />
    <link rel="stylesheet" href="./css/contrast.css" />
    <link rel="stylesheet" href="./css/acessibilidade.css" />
    <link rel="stylesheet" href="./css/modal.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="./img/logoImg2.png" />
    <title>
        Anjos da Doação - FAQ
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

    <div class="bg-azul">
        <nav class="navbar navBar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <img class="logoImg" src="./img/logoImg2.png" alt="Logo" title="Logo" />
                    <img src="./img/logoTexto2.png" class="imgAparece" alt="Logo" title="Logo" />
                </a>
                <button onclick="botaBg()" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="navbar-collapse collapse div-nav align-self-center" id="navbar">
                    <ul class="navbar-nav ul-editavel">
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

        <!-- botao -->
        <div class="fab sombra">
            <a href="login.php">
                <i class="fa fa-user" aria-hidden="true"> </i>
            </a>
        </div>
        <!-- botao -->
    </div>

    <main style="min-height: 750px" class="bg-azul branco">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="question-container mt-10">
                        <div class="question-box">
                            <div class="icon-question">
                                <img class="question-icon" src="./img/icons/empresa.png" alt="Anjo" />
                            </div>
                            <span class="question ">Sou uma empresa que não possui estabelecimento, como posso ajudar?</span>
                            <span class="expand-button"><i class="fas fa-chevron-down"></i></span>
                            <div class="bigger-text mt-3 pb-4">
                                Seu estabelecimento irá fazer parte da empresas parceiras, essas empresas apóiam a causa disponibilizando desconto para os doadores que realizam doação e ajudando com a divulgação do projeto.
                            </div>
                        </div>
                    </div>

                    <div class="question-container mt-4">
                        <div class="question-box">
                            <div class="icon-question">
                                <img class="question-icon" src="./img/icons/donatario.png" alt="Anjo" />
                            </div>
                            <span class="question">Preciso de um equipamento, como adquirir?</span>
                            <span class="expand-button"><i class="fas fa-chevron-down"></i></span>
                            <div class="bigger-text mt-3 pb-4">
                                Você consegue adquirir um equipamento através do nosso site, precisa ser realizado um cadastro rápido e após o cadastro poderá procurar o equipamento desejado.
                            </div>
                        </div>
                    </div>

                    <div class="question-container mt-4">
                        <div class="question-box">
                            <div class="icon-question">
                                <img class="question-icon" src="./img/icons/mulher.png" alt="Anjo" />
                            </div>
                            <span class="question">Tenho um equipamento em mãos, como realizar uma doação?</span>
                            <span class="expand-button"><i class="fas fa-chevron-down"></i></span>
                            <div class="bigger-text mt-3 pb-4">
                                A doação é realizada no nosso site, precisa de um cadastro do usuário e futuramente do equipamento, onde você terá que escolher um ponto de coleta próximo de sua casa para levar o equipamento e após ele ser verificado, o equipamento será disponibilizado na plataforma.
                            </div>
                        </div>
                    </div>

                    <div class="question-container mt-4">
                        <div class="question-box">
                            <div class="icon-question">
                                <img class="question-icon" src="./img/icons/armazem-de-dados.png" alt="Anjo" />
                            </div>
                            <span class="question">Tenho um estabelecimento, como posso ajudar?</span>
                            <span class="expand-button"><i class="fas fa-chevron-down"></i></span>
                            <div class="bigger-text mt-3 pb-4">
                                Locais como o seu, poderá ajudar como ponto de coleta que é responsável por armazenar os equipamentos que foram deixados pelos doadores.
                            </div>
                        </div>
                    </div>

                    <div class="question-container mt-4">
                        <div class="question-box">
                            <div class="icon-question">
                                <img class="question-icon" src="./img/icons/anjo.png" alt="Anjo" />
                            </div>
                            <span class="question">Não possuo nem uma empresa nem um equipamento, o que fazer?</span>
                            <span class="expand-button"><i class="fas fa-chevron-down"></i></span>
                            <div class="bigger-text mt-3 pb-4">
                                Nesse caso, você poderá ser um anjo ajudando nas divulgações do projeto.
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
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
<script src="./js/faq.js"></script>
<script>
    new window.VLibras.Widget("https://vlibras.gov.br/app");
</script>
<script src="./js/barra.js"></script>
<script src="./js/index.js"></script>
<script src="https://kit.fontawesome.com/e7ebc2fc39.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>