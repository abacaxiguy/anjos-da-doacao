<?php

require 'classes/conexao.php';

session_start();

if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {

    $email = trim($_POST['email']);
    $senha = trim($_POST['password']);

    $conexao = new Conexao();
    $conexao = $conexao->conectar();
    $query = "SELECT * from usuario WHERE email_usuario=:email";
    $query = $conexao->prepare($query);
    $query->bindValue('email', $email);
    $query->execute();

    if ($query->rowCount() > 0) {
        $res = $query->fetch();

        if (password_verify($senha, $res['senha_usuario'])) {
            $_SESSION['id_usuario'] = $res['id_usuario'];
            header('location: catalogo.php');
        } else {
            header('location: ./login.php?authenticated=false');
        }
    } else {
        header('location: ./login.php?authenticated=false');
    }
} else {
    header('location: ./login.php?authenticated=false');
}
