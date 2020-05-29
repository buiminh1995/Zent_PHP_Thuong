<?php
    require_once('../connection.php');
    $id = $POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "DELETE FROM categories WHERE id=".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg','Xoáthành công',time()+5);
        header('Location: categories.php');
    }else{
        setcookie('msg','Xoá không thành công',time()+5);
    }
    header('Location: categories.php');

?> 