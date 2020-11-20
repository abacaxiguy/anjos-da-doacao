<?php
session_start();
if (isset($_SESSION['id_conta'])) {
    header('location: catalogo.php');
}

if (isset($_GET['selector']) && isset($_GET['validator'])) {
    $selector = $_GET['selector'];
    $validator = $_GET['validator'];
}

if (empty($selector) || empty($validator)) {
    header('location: ./recuperar.php');
} else {
    if (ctype_xdigit($selector) !== true && ctype_xdigit($validator) !== true) {
        header('location: ./recuperar.php');
    }
}
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'field') {
        $error = '<div class="alert alert-danger text-center mt-3" role="alert">Insira uma senha válida!</div>';
    } else if ($_GET['error'] == 'password') {
        $error = '<div class="alert alert-danger text-center mt-3" role="alert">As senhas estão diferentes!</div>';
    } else if ($_GET['error'] == 'unknown') {
        $error = '<div class="alert alert-danger text-center mt-3" role="alert">Houve um erro!</div>';
    } else if ($_GET['error'] == 'authenticated') {
        $error = '<div class="alert alert-danger text-center mt-3" role="alert">Erro de autenticação. Verifique se o link está correto ou o link está expirado!</div>';
    }
} else {
    $error = '';
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
                        Agora só precisamos de sua nova senha e a confirmação da mesma.
                    </p>
                    <form class="form" method="POST" action="./controle.php">
                        <input type="hidden" name="selector" value="<?= $selector ?>">
                        <input type="hidden" name="validator" value="<?= $validator ?>">
                        <div class="form-group">
                            <label class="h4" for="newpassword">Nova senha</label>
                            <input name="newpassword" type="password" class="form-control" id="newpassword" aria-describedby="UsuarioHelp" />
                        </div>

                        <div class="form-group">
                            <label class="h4" for="newcpassword">Confirmar nova senha</label>
                            <input name="newcpassword" type="password" class="form-control" id="newcpassword" aria-describedby="UsuarioHelp" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-4 mb-3" name="reset-password">
                            Redefinir senha
                        </button>
                    </form>

                    <?= $error ?>

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