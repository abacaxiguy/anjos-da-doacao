<?php
session_start();
if (!isset($_SESSION['authentication']) || !$_SESSION['authentication']) {
    header('location: ../login.php?login=erro');
}
