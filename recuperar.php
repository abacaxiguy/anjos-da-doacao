<?php
session_start();
if (isset($_SESSION['id_conta'])) {
    header('location: catalogo.php');
}

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <title>Anjos da Doação - Recupere sua senha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style_login.css" />
    <link rel="stylesheet" href="./css/acessibilidade.css" />
    <link rel="stylesheet" href="./css/contrast.css" />
    <link rel="shortcut icon" href="./img/logoImg2.png" />
</head>

<body cz-shortcut-listen="true">
    <div class="barra-acessibilidade">
        <div class="container">
            <ul>
                <li class="ba-item-left">
                    <a class="ba-link" accesskey="1" href="#username">Ir para conteúdo [1]</a>
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

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card card-recuperar">
                <div class="col-lg margens">
                    <a href="index.php" class="mb-5">
                        <img src="./img/logo2.png" width="350" class="imgTopo" />
                    </a>
                    <h1 class="h1 mt-2">Recuperar Senha</h1>
                    <p class="fraseInicio">
                        Esqueceu a sua senha? Só precisamos do seu e-mail
                        utilizado para o cadastro.
                    </p>
                    <form class="form" method="POST" action="./controle.php?action=pwdrecovery">
                        <div class="form-group">
                            <label class="h4" for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="UsuarioHelp" placeholder="Digite seu email" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-4 mb-3">
                            Enviar e-mail
                        </button>
                    </form>
                    <?php
                    if (isset($_GET['sent'])) {
                        if ($_GET['sent'] == 'true') {
                            echo '<div class="alert alert-success text-center mt-3" role="alert">E-mail enviado!</div>';
                        } else if ($_GET['sent'] == 'false') {
                            echo '<div class="alert alert-danger text-center mt-3" role="alert">Ocorreu um erro ao enviar o email!</div>';
                        }
                    } else {
                        if (isset($_GET['email']) && $_GET['email'] == 'notfound') {
                            echo '<div class="alert alert-danger text-center mt-3" role="alert">Este e-mail não foi encontrado!</div>';
                        }
                    }
                    ?>
                    <div class="d-flex justify-content-center links">
                        <a tabindex="10" href="login.php">Já tem uma conta?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script src="./js/barra.js"></script>

</html>