<?php
require 'autenticador_p.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Anjos da Doação - Seus Equipamentos</title>
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

                <a href="./admin.php">
                    <div class="login ml-5">
                        <div class="icon mr-2">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>
                            <?= $array['nome_pd'] ?>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </nav>

    <main class="mt-5 mb-5 container">
        <div class="profile-name">
            <div class="name-wrapper">Olá,</div>
            <span class="name-span bold pr-2"><?= $array['nome_pd'] ?></span>
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
                    <a href="./admin_cadastrar.php"><i class="fas fa-archive"></i> Cadastrar
                        Equipamento</a>
                    <a class="active" href="./admin_equipamentos.php"><i class="fas fa-box-open"></i> Seus
                        Equipamentos</a>
                    <a href="./admin_solicitacoes.php"><i class="fas fa-receipt"></i> Solicitações</a>
                </div>
            </nav>

            <div style="min-height: 300px;" class="profile-body">

                <div class="search-wrapper mt-3 d-flex">
                    <form class="d-flex" style="width: 50%;">
                        <input style="border: 3px solid rgb(61, 226, 157); " class="search-input" type="search" placeholder="O que procura?" aria-label="Pesquisar" results="5" name="s" />

                        <button class="btn-search" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <select class="custom-select" style="border-width: 3px;">
                        <option value="mr">Mais Recentes</option>
                        <option value="ma">Mais Antigos</option>
                        <option value="ac">Ordem Alfabética Crescente</option>
                        <option value="ad">Ordem Alfabética Decrescente</option>
                    </select>

                    <div class="checkbox-out">
                        <label for="out">Sem estoque</label>
                        <input type="checkbox" name="out" id="out">
                    </div>
                </div>
                <div class="order pending mt-5">
                    <div class="header-wrapper px-3 py-2">
                        <div class="order-header">
                            Equipamento cadastrado no dia:
                            <span class="order-date">02/07/2020</span>
                        </div>
                        <div class="order-header">
                            Doação Nº
                            <span class="order-id">1586</span>
                        </div>
                    </div>
                    <div class="order-body mt-2 p-3">
                        <div class="body-wrapper">

                            <div class="queue-place ">
                                Disponível no catálogo
                            </div>
                        </div>
                        <div class="products-wrapper mt-4 mb-4">
                            <div class="product mt-5">
                                <div class="product-image">
                                    <img src="../img/muleta.jpg" width="150px" alt="" />
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        Muleta
                                    </div>
                                    <div class="product-user mt-4">
                                        <span class="font-weight-bold">Doador: </span> <span class="user">João Lucas</span>
                                    </div>

                                    <div class="product-quantity d-flex align-items-center my-2">
                                        <label for="quatity" class="font-weight-bold"> Quantidade:</label>
                                        <input type="number" name="quantity" value="5" min="0" class="mt-2 ml-3 form-control" id="id_first_name" required tabindex="1" />
                                    </div>


                                    <div class="description-wrapper">
                                        <span class=" font-weight-bold">Descrição:</span>
                                        <div class="product-description">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic laboriosam sint vel, quasi velit quia at provident architecto
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum, explicabo rem quam tempore maiores repellat tenetur ratione a hic, delectus facere dolorem iusto exercitationem neque et consequuntur quas quia?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="save-order pt-4">
                            <button class="btn">
                                Salvar
                                <i class="pl-2 fas fa-save"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="order pending mt-5">
                    <div class="header-wrapper px-3 py-2">
                        <div class="order-header">
                            Equipamento cadastrado no dia:
                            <span class="order-date">02/07/2020</span>
                        </div>
                        <div class="order-header">
                            Doação Nº
                            <span class="order-id">1586</span>
                        </div>
                    </div>
                    <div class="order-body mt-2 p-3">
                        <div class="body-wrapper">

                            <div class="queue-place ">
                                Disponível no catálogo
                            </div>
                        </div>
                        <div class="products-wrapper mt-4 mb-4">
                            <div class="product mt-5">
                                <div class="product-image">
                                    <img src="../img/muleta.jpg" width="150px" alt="" />
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        Muleta
                                    </div>
                                    <div class="product-user mt-4">
                                        <span class="font-weight-bold">Doador: </span> <span class="user">João Lucas</span>
                                    </div>

                                    <div class="product-quantity d-flex align-items-center my-2">
                                        <label for="quatity" class="font-weight-bold"> Quantidade:</label>
                                        <input type="number" name="quantity" value="5" min="0" class="mt-2 ml-3 form-control" id="id_first_name" required tabindex="1" />
                                    </div>


                                    <div class="description-wrapper">
                                        <span class=" font-weight-bold">Descrição:</span>
                                        <div class="product-description">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic laboriosam sint vel, quasi velit quia at provident architecto
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum, explicabo rem quam tempore maiores repellat tenetur ratione a hic, delectus facere dolorem iusto exercitationem neque et consequuntur quas quia?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="save-order pt-4">
                            <button class="btn">
                                Salvar
                                <i class="pl-2 fas fa-save"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="order cancelled mt-5">
                    <div class="header-wrapper px-3 py-2">
                        <div class="order-header">
                            Equipamento cadastrado no dia:
                            <span class="order-date">02/07/2020</span>
                        </div>
                        <div class="order-header">
                            Doação Nº
                            <span class="order-id">1586</span>
                        </div>
                    </div>
                    <div class="order-body mt-2 p-3">
                        <div class="body-wrapper">

                            <div class="cancelled-place">
                                Fora do catálogo
                            </div>
                        </div>
                        <div class="products-wrapper mt-4 mb-4">
                            <div class="product mt-5">
                                <div class="product-image">
                                    <img src="../img/muleta.jpg" width="150px" alt="" />
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        Muleta
                                    </div>
                                    <div class="product-user mt-4 mb-2">
                                        <span class="font-weight-bold">Doador: </span> <span class="user">João Lucas</span>
                                    </div>

                                    <div class="product-quantity my-3">
                                        <span for="quatity" class="font-weight-bold"> Quantidade:</span> <span>0 unidades</span>
                                    </div>


                                    <div class="description-wrapper">
                                        <span class=" font-weight-bold">Descrição:</span>
                                        <div class="product-description">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic laboriosam sint vel, quasi velit quia at provident architecto
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum, explicabo rem quam tempore maiores repellat tenetur ratione a hic, delectus facere dolorem iusto exercitationem neque et consequuntur quas quia?
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="cancel-order pt-4">
                            <button class="btn">
                                Desfazer <i class="ml-1 fas fa-undo-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="order cancelled mt-5">
                    <div class="header-wrapper px-3 py-2">
                        <div class="order-header">
                            Equipamento cadastrado no dia:
                            <span class="order-date">02/07/2020</span>
                        </div>
                        <div class="order-header">
                            Doação Nº
                            <span class="order-id">1586</span>
                        </div>
                    </div>
                    <div class="order-body mt-2 p-3">
                        <div class="body-wrapper">

                            <div class="cancelled-place">
                                Fora do catálogo
                            </div>
                        </div>
                        <div class="products-wrapper mt-4 mb-4">
                            <div class="product mt-5">
                                <div class="product-image">
                                    <img src="../img/muleta.jpg" width="150px" alt="" />
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        Muleta
                                    </div>
                                    <div class="product-user mt-4 mb-2">
                                        <span class="font-weight-bold">Doador: </span> <span class="user">João Lucas</span>
                                    </div>

                                    <div class="product-quantity my-3">
                                        <span for="quatity" class="font-weight-bold"> Quantidade:</span> <span>0 unidades</span>
                                    </div>


                                    <div class="description-wrapper">
                                        <span class=" font-weight-bold">Descrição:</span>
                                        <div class="product-description">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic laboriosam sint vel, quasi velit quia at provident architecto
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum, explicabo rem quam tempore maiores repellat tenetur ratione a hic, delectus facere dolorem iusto exercitationem neque et consequuntur quas quia?
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="cancel-order pt-4">
                            <button class="btn">
                                Desfazer <i class="ml-1 fas fa-undo-alt"></i>
                            </button>
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
        <a href="../faq.php">
            <button class="btn btn-gradient"><i class="fas fa-question-circle mr-1"></i> Ficou com alguma dúvida? </button>
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

<!-- temporary script -->
<script>
    const
        orders = document.querySelectorAll(".order"),
        checkbox = document.querySelector("#out");

    orders.forEach(order => {
        if (order.classList.contains('pending')) {
            order.classList.remove('hidden');
        } else {
            order.classList.add('hidden');
        }
    });

    checkbox.addEventListener('click', (e) => {
        if (e.target.checked)
            orders.forEach(order => {
                if (order.classList.contains('pending')) {
                    order.classList.add('hidden');
                } else {
                    order.classList.remove('hidden');
                }
            });
        else orders.forEach(order => {
            if (order.classList.contains('pending')) {
                order.classList.remove('hidden');
            } else {
                order.classList.add('hidden');
            }
        });
    })
</script>

<!-- temporary script -->

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