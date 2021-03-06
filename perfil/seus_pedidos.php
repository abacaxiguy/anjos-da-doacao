<?php
require('../autenticador.php');

$first_name = explode(' ', $array['nome_usuario'])[0];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação - Seus Pedidos</title>
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
                    <a href="./cadastrar.php"><i class="fas fa-archive"></i> Cadastrar
                        Equipamento</a>
                    <a class="active" href="./seus_pedidos.php"><i class="fas fa-box-open"></i> Seus Pedidos</a>
                    <a href="./suas_doacoes.php"><i class="fas fa-clipboard-list"></i> Suas
                        Doações</a>
                </div>
            </nav>
            <div style="min-height: 300px;" class="profile-body container">
                <div class="col-12">
                    <div class="order-wrapper container">
                        <div class="static-header mt-4">
                            <div class="order-number">
                                <span class="number-orders">0 pedidos</span>
                                em:
                            </div>
                            <div class="order-filter">
                                <select class="custom-select">
                                    <option value="p">Pendentes</option>
                                    <option value="r">Retirados</option>
                                    <option value="c">Cancelados</option>
                                </select>
                            </div>
                        </div>

                        <div class="order pending mt-5">
                            <div class="header-wrapper px-3 py-2">
                                <div class="order-header">
                                    Pedido realizado no dia:
                                    <span class="order-date">12/05/2020</span>
                                </div>
                                <div class="order-header">
                                    Pedido Nº
                                    <span class="order-id">1586</span>
                                </div>
                            </div>
                            <div class="order-body mt-2 p-3">
                                <div class="body-wrapper">
                                    <div class="verification-code">
                                        Código de verificação:
                                        <span class="verification-span">GZ67KA</span>
                                    </div>

                                    <div class="queue-place">
                                        Você está em
                                        <span class="place-number">1º</span>
                                        lugar na fila!
                                    </div>
                                </div>
                                <div class="products-wrapper mt-4 mb-4">
                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/muleta.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Muleta
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Pestalozzi</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">2 unidades</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order pending mt-5">
                            <div class="header-wrapper px-3 py-2">
                                <div class="order-header">
                                    Pedido realizado no dia:
                                    <span class="order-date">16/03/2020</span>
                                </div>
                                <div class="order-header">
                                    Pedido Nº
                                    <span class="order-id">9412</span>
                                </div>
                            </div>
                            <div class="order-body mt-2 p-3">
                                <div class="body-wrapper">
                                    <div class="waiting-warning">
                                        Aguarde mais um pouco!
                                    </div>

                                    <div class="queue-place">
                                        Você está em
                                        <span class="place-number">3º</span>
                                        lugar na fila!
                                    </div>
                                </div>
                                <div class="products-wrapper mt-4 mb-4">
                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/bota.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Bota Ortopédica
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Adefal</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">1 unidade</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cancel-order">
                                    <button class="btn">
                                        Cancelar Pedido
                                        <i class="pl-2 fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="order received mt-5">
                            <div class="header-wrapper px-3 py-2">
                                <div class="order-header">
                                    Pedido realizado no dia:
                                    <span class="order-date">12/05/2020</span>
                                </div>
                                <div class="order-header">
                                    Pedido Nº
                                    <span class="order-id">8410</span>
                                </div>
                            </div>
                            <div class="order-body mt-2 p-3">
                                <div class="body-wrapper">
                                    <div class="received-warning">
                                        Retirado em:
                                        <span class="received-date">29/05/2020</span>
                                    </div>

                                    <div class="received-place">
                                        Pedido já retirado!
                                    </div>
                                </div>
                                <div class="products-wrapper mt-4 mb-4">
                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/cadeira.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Bota Ortopédica
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Adefal</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">1 unidade</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/muleta.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Bota Ortopédica
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Adefal</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">1 unidade</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order received mt-5">
                            <div class="header-wrapper px-3 py-2">
                                <div class="order-header">
                                    Pedido realizado no dia:
                                    <span class="order-date">16/03/2020</span>
                                </div>
                                <div class="order-header">
                                    Pedido Nº
                                    <span class="order-id">4618</span>
                                </div>
                            </div>
                            <div class="order-body mt-2 p-3">
                                <div class="body-wrapper">
                                    <div class="received-warning">
                                        Retirado em:
                                        <span class="received-date">01/04/2020</span>
                                    </div>

                                    <div class="received-place">
                                        Pedido já retirado!
                                    </div>
                                </div>
                                <div class="products-wrapper mt-4 mb-4">
                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/bota.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Bota Ortopédica
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Adefal</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">1 unidade</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order received mt-5">
                            <div class="header-wrapper px-3 py-2">
                                <div class="order-header">
                                    Pedido realizado no dia:
                                    <span class="order-date">16/03/2020</span>
                                </div>
                                <div class="order-header">
                                    Pedido Nº
                                    <span class="order-id">3164</span>
                                </div>
                            </div>
                            <div class="order-body mt-2 p-3">
                                <div class="body-wrapper">
                                    <div class="received-warning">
                                        Retirado em:
                                        <span class="received-date">01/04/2020</span>
                                    </div>

                                    <div class="received-place">
                                        Pedido já retirado!
                                    </div>
                                </div>
                                <div class="products-wrapper mt-4 mb-4">
                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/muleta.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Bota Ortopédica
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Adefal</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">1 unidade</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order cancelled mt-5">
                            <div class="header-wrapper px-3 py-2">
                                <div class="order-header">
                                    Pedido realizado no dia:
                                    <span class="order-date">16/03/2020</span>
                                </div>
                                <div class="order-header">
                                    Pedido Nº
                                    <span class="order-id">0165</span>
                                </div>
                            </div>
                            <div class="order-body mt-2 p-3">
                                <div class="body-wrapper">
                                    <div class="cancelled-warning">
                                        Cancelado em:
                                        <span class="cancelled-date">10/02/2020</span>
                                    </div>

                                    <div class="cancelled-place">
                                        Este pedido foi cancelado!
                                    </div>
                                </div>
                                <div class="products-wrapper mt-4 mb-4">
                                    <div class="product mt-5">
                                        <div class="product-image">
                                            <img src="../img/bota.jpg" class="img-fluid" width="150px" alt="" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                Bota Ortopédica
                                            </div>
                                            <div class="product-donor mt-3">
                                                Doado por:
                                                <span class="donor-span">Adefal</span>
                                            </div>
                                            <div class="product-quantity">
                                                Quantidade:
                                                <span class="quantity-span">1 unidade</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- temporary -->
    <script>
        const select = document.querySelector(".custom-select"),
            orders = document.querySelectorAll(".order"),
            spanNumber = document.querySelector(".number-orders");

        let currentValue,
            numberOrders = 0;

        orders.forEach((order) => {
            if (order.classList.contains("pending")) {
                order.classList.remove("hidden");
                numberOrders++;
            } else order.classList.add("hidden");
        });

        spanNumber.innerText =
            numberOrders == 1 ?
            `${numberOrders} pedido` :
            `${numberOrders} pedidos`;

        select.addEventListener("change", (e) => {
            numberOrders = 0;
            for (i of e.target.options) {
                if (i.selected) {
                    currentValue = i.value;
                    if (currentValue == "p") {
                        orders.forEach((order) => {
                            if (order.classList.contains("pending")) {
                                order.classList.remove("hidden");
                                numberOrders++;
                            } else order.classList.add("hidden");
                        });
                    } else if (currentValue == "r") {
                        orders.forEach((order) => {
                            if (order.classList.contains("received")) {
                                order.classList.remove("hidden");
                                numberOrders++;
                            } else order.classList.add("hidden");
                        });
                    } else if (currentValue == "c") {
                        orders.forEach((order) => {
                            if (order.classList.contains("cancelled")) {
                                order.classList.remove("hidden");
                                numberOrders++;
                            } else {
                                order.classList.add("hidden");
                            }
                        });
                    }
                }
            }
            spanNumber.innerText =
                numberOrders == 1 ?
                `${numberOrders} pedido` :
                `${numberOrders} pedidos`;
            e.target.blur();
        });
    </script>
    <!-- temporary -->

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