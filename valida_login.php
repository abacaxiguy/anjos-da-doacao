<?php

$usuarios_bd = [
    array('id' => 1, 'cpf' => '12214497455', 'password' => '123', 'ponto' => 0),
    array('id' => 2, 'cpf' => '78455804068', 'password' => '123', 'ponto' => 1),
    array('id' => 3, 'cpf' => '94788742098', 'password' => '123', 'ponto' => 0),
    array('id' => 4, 'cpf' => '44366952041', 'password' => '123', 'ponto' => 1),
];

session_start();

$id_user = null;
$ponto = null;
$authenticated = false;

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
