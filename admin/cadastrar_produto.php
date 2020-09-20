<?php

session_start();

if (!isset($_SESSION['authentication']) || !$_SESSION['authentication'] || !$_SESSION['ponto']) {
    header('location: ../login.php?login=erro');
} else {
    if ($_POST['quantity'] < 1 || !$_POST['name'] || !$_POST['description']) {
        header('location: admin_cadastrar.php?authentication=false');
    } else {       // ponto vv
        $product_text = 'ADEFAL' . '|' .  implode('|', $_POST) . PHP_EOL;
        $file = fopen('products.txt', 'a');
        fwrite($file, $product_text);
        fclose($file);
        header('location: admin_cadastrar.php?authentication=true');
    }
}
