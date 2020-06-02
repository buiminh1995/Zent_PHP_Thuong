<?php
    session_start();
    $id = $_GET['id'];
    unset($_SESSION['info'.$id]);

    setcookie('msg','Xoá thành công',time()+5); 

    header('Location: list.php');

?> 