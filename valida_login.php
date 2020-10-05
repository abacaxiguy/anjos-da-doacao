<?php

require 'classes/conexao.php';

session_start();

if (isset($_POST['cpf']) && $_POST['cpf'] && isset($_POST['password']) && $_POST['password']) {

    $cpf = preg_replace('/[^0-9]/is', '', $_POST['cpf']);
    $senha = $_POST['password'];

    $conexao = new Conexao();
    $conexao = $conexao->conectar();
    $query = "SELECT * from usuario WHERE cpf_usuario=:cpf";
    $query = $conexao->prepare($query);
    $query->bindValue('cpf', $cpf);
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
}
