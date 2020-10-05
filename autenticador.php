<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header('location: ../login.php?login=erro');
}
require 'classes/conexao.php';

$conexao = new Conexao();
$conexao = $conexao->conectar();
$sql = "SELECT * FROM usuario WHERE id_usuario=" . $_SESSION['id_usuario'];
$stmt = $conexao->query($sql);
$array = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($array)) {
    header('location: ../login.php?login=erro');
}
