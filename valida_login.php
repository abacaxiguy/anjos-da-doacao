<?php

/**
 * 0 - Usuario
 * 1 - Ponto de Coleta
 * 2 - Empresa Parceira
 */


require 'classes/conexao.php';

session_start();

if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {

    $email = trim($_POST['email']);
    $senha = trim($_POST['password']);

    $conexao = new Conexao();
    $conexao = $conexao->conectar();

    // Usuario

    $query = "SELECT * from usuario WHERE email_usuario=:email";
    $query = $conexao->prepare($query);
    $query->bindValue('email', $email);
    $query->execute();

    if ($query->rowCount() > 0) {
        $res = $query->fetch();

        if (password_verify($senha, $res['senha_usuario'])) {
            $_SESSION['id_conta'] = $res['id_usuario'];
            $_SESSION['id_tipo'] = 0;
            header('location: catalogo.php');
        } else {
            header('location: ./login.php?authenticated=false&user=user');
        }
    } else {

        // Ponto de coleta

        $conexao = new Conexao();
        $conexao = $conexao->conectar();

        $query = "SELECT * from ponto_doacao WHERE email_pd=:email";
        $query = $conexao->prepare($query);
        $query->bindValue('email', $email);
        $query->execute();

        if ($query->rowCount() > 0) {
            $res = $query->fetch();

            if (password_verify($senha, $res['senha_pd'])) {
                $_SESSION['id_conta'] = $res['id_pd'];
                $_SESSION['id_tipo'] = 1;
                header('location: catalogo.php');
            } else {
                header('location: ./login.php?authenticated=false&user=ponto');
            }
        } else {

            // Empresa Parceira

            $conexao = new Conexao();
            $conexao = $conexao->conectar();

            $query = "SELECT * from empresa_parceira WHERE email_empresa=:email";
            $query = $conexao->prepare($query);
            $query->bindValue('email', $email);
            $query->execute();

            if ($query->rowCount() > 0) {
                $res = $query->fetch();

                if (password_verify($senha, $res['senha_empresa'])) {
                    $_SESSION['id_conta'] = $res['id_empresa'];
                    $_SESSION['id_tipo'] = 2;
                    header('location: catalogo.php');
                } else {
                    header('location: ./login.php?authenticated=false&user=empresa');
                }
            } else {
                header('location: ./login.php?authenticated=false');
            }
        }
    }
} else {
    header('location: ./login.php?authenticated=false');
}
