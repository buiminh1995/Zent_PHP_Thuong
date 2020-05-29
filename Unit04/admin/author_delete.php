<?php
    require_once('../connection.php');
    $id = $POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $query = "DELETE FROM authors WHERE id=".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg','Xoá thành công',time()+5);
        header('Location: categories.php');
    }else{
        setcookie('msg','Xoá không thành công',time()+5);
    }
    header('Location: authors.php');

?> 