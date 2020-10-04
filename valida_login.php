<?php

session_start();

$id_user;
$authenticated;

foreach ($usuarios_bd as $usuario) {
    preg_match_all('/\d+/', $_POST['cpf'], $cpf, PREG_UNMATCHED_AS_NULL);
    $cpf = implode('', $cpf[0]);
    if ($usuario['cpf'] == $cpf && $usuario['password'] == $_POST['password']) {
        $authenticated = true;
        $id_user = $usuario['id'];
        $ponto = $usuario['ponto'];
        break;
    }
}

if ($authenticated) {
    header('location: catalogo.php');
    $_SESSION['authentication'] = $authenticated;
    $_SESSION['id'] = $id_user;
    $_SESSION['ponto'] = $ponto;
} else {
    header('location: ./login.php?authenticated=false');
}
