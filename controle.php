<?php

require 'classes/usuario.php';
require 'classes/conexao.php';

if (isset($_GET['action']) && $_GET['action'] == 'register') {
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
}
header('location: ./index.php');
