<?php
session_start();
if (!isset($_SESSION['id_conta']) && !isset($_SESSION['id_tipo'])) {
    header('location: ../login.php?login=erro');
}
require '../classes/conexao.php';

if ($_SESSION['id_tipo'] == 2) {
    $conexao = new Conexao();
    $conexao = $conexao->conectar();
    $sql = "SELECT * FROM empresa_parceira WHERE id_empresa=" . $_SESSION['id_conta'];
    $stmt = $conexao->query($sql);
    $array = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($array)) {
        header('location: ../login.php?login=erro');
    }
} else {
    header('location: ../login.php?login=erro');
}
