<?php

require 'classes/conexao.php';

if (isset($_GET['action']) && $_GET['action'] == 'register') {
    require 'classes/usuario.php';
    $usuario = new Usuario();
    $conexao = new Conexao();
    $usuario->__set('pnome', $_POST['first_name']);
    $usuario->__set('unome', $_POST['last_name']);
    $usuario->__set('senha', $_POST['password']);
    $usuario->__set('csenha', $_POST['cpassword']);
    $usuario->__set('telefone', $_POST['phone']);
    $usuario->__set('email', $_POST['email']);
    $usuario->__set('nascimento', $_POST['birth_date']);
    $usuario->__set('cpf', $_POST['id_cpf']);
    if ($usuario->cadastrar($conexao)) {
        header('location: ./login.php?register=true');
    } else {
        header('location: ./register.php?error=unknown');
    }

    //
} else if (isset($_GET['action']) && $_GET['action'] == 'pwdrecovery') {
    require 'enviar_email.php';
    $conexao = new Conexao();
    $conexao = $conexao->conectar();

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/add/nova_senha.php?selector=$selector&validator=" . bin2hex($token);
    $expires = date('U') + 1800;

    $emailPost = $_POST['email'];

    $query = "SELECT email_usuario FROM usuario WHERE email_usuario='$emailPost'";
    $stmt = $conexao->query($query);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($res) || !$res) {
        header('location: recuperar.php?email=notfound');
        return false;
    }
    $query = "DELETE FROM recuperar_senha WHERE email_recuperar='$emailPost'";
    $conexao->exec($query);

    $hashed_token = password_hash($token, PASSWORD_DEFAULT);
    $query = "INSERT INTO recuperar_senha(email_recuperar, selector_recuperar, token_recuperar, expiracao_recuperar) VALUES ('$emailPost', '$selector', '$hashed_token', $expires)";
    $conexao->exec($query);


    // email

    $assunto = "Recupere sua senha para Anjos da Doação";

    $msg = '<img src="https://anjosdadoacao.imfast.io/img/logo2.png" width="350" alt="Logo Anjos da Doação" />';
    $msg .= '<p>Nós recebemos um pedido de redefinição de sua senha. </p><p>O link para redefinir sua senha está abaixo. Se você não fez esse pedido, por favor ignore este email</p>';
    $msg .= '<p>Aqui está seu link para redefinir sua senha: <br>';
    $msg .= '<a href="' . $url . '">' . $url . '</a></p>';

    header('location: recuperar.php?sent=true');
    enviarEmail($msg, $assunto, $emailPost);

    //
} else if (isset($_POST['reset-password'])) {
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['newpassword'];
    $cpassword = $_POST['newcpassword'];

    if (empty($password) || empty($cpassword) || strlen($password) < 6) {
        header('location: nova_senha.php?selector=' . $selector . '&validator=' . $validator . '&error=field');
    } else if ($password !== $cpassword) {
        header('location: nova_senha.php?selector=' . $selector . '&validator=' . $validator . '&error=password');
    }

    $currentDate = date('U');
    $conexao = new Conexao();
    $conexao = $conexao->conectar();

    $sql = "SELECT * FROM recuperar_senha WHERE selector_recuperar='$selector' AND expiracao_recuperar >= $currentDate";
    $stmt = $conexao->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($array)) {
        header('location: nova_senha.php?selector=' . $selector . '&validator=' . $validator . '&error=unknown');
    }

    $tokenBin = hex2bin($validator);
    $tokenCheck = password_verify($tokenBin, $array[0]["token_recuperar"]);

    if ($tokenCheck === false) {
        header('location: nova_senha.php?selector=' . $selector . '&validator=' . $validator . '&error=authenticated');
    } else if ($tokenCheck === true) {
        $tokenEmail = $array[0]['email_recuperar'];

        $sql = "SELECT * FROM usuario WHERE email_usuario='$tokenEmail' LIMIT 1";
        $stmt = $conexao->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($users)) {
            header('location: nova_senha.php?selector=' . $selector . '&validator=' . $validator . '&error=unknown');
        }
        $newPasswordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE usuario SET senha_usuario='$newPasswordHash' WHERE email_usuario='$tokenEmail' LIMIT 1";
        if ($conexao->exec($sql) == null) {
            header('location: nova_senha.php?selector=' . $selector . '&validator=' . $validator . '&error=unknown');
        }
        $query = "DELETE FROM recuperar_senha WHERE email_recuperar='$tokenEmail'";
        if ($conexao->exec($query)) {
            header('location: login.php?password=reset');
        }
    }


    //
} else {
    header('location: ./index.php');
}
