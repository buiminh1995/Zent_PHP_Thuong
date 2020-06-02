<?php
    session_start();
    $id = $_GET['id'];
    unset($_SESSION[$id]);

    header('Location: list_products.php');
?>