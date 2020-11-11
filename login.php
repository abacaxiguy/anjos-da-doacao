<?php
session_start();
if (isset($_SESSION['id_usuario'])) {
    header('location: catalogo.php');
}
?>

<?php

if (isset($_GET['authenticated']) && $_GET['authenticated'] == 'false') {
    $erro = '<div class="alert alert-danger text-center mt-3" role="alert">Seus dados estão incorretos!</div>';
} else if (isset($_GET['login']) && $_GET['login'] == 'erro') {
    $erro = '<div class="alert alert-danger text-center mt-3" role="alert">Faça login para entrar nessa página!</div>';
} else if (isset($_GET['register']) && $_GET['register'] == 'true') {
    $erro = '<div class="alert alert-success text-center mt-3" role="alert">Cadastro realizado com sucesso!</div>';
} else if (isset($_GET['password']) && $_GET['password'] == 'reset') {
    $erro = '<div class="alert alert-success text-center mt-3" role="alert">Senha redefinida com sucesso!</div>';
} else {
    $erro = '';
}

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <title>Anjos da Doação - Login</title>
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
            <div class="card">
                <div class="col-lg margens">
                    <a href="index.php" class="mb-5">
                        <img src="./img/logo2.png" width="350" class="imgTopo" />
                    </a>

                    <h1 class="h1 mt-2">Login</h1>
                    <p class="fraseInicio">
                        Já possui uma conta? Preencha com seus dados para
                        entrar.
                    </p>
                    <form class="form" method="POST" action="./valida_login.php">
                        <div class="form-group">
                            <label class="h4" for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email" />
                        </div>
                        <div class="form-group">
                            <label class="h4" for="password">Senha</label>
                            <input name="password" type="password" class="form-control" id="password" />
                            <p class="links esqueceu">
                                <a href="./recuperar.php">Esqueceu sua senha?</a>
                            </p>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-4 mb-3">
                            Entrar
                        </button>
                        <?= $erro ?>
                    </form>

                    <div class="d-flex justify-content-center links">
                        <p>
                            Não tem uma conta? Crie uma
                            <a href="register.php">agora!</a>
                        </p>
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
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="./js/barra.js"></script>

</html>