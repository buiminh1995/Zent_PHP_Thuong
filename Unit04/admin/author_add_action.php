<?php
    require_once('../connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $status = $_POST['status'];
    $query = "INSERT INTO authors(name,email,password,status) VALUES ('".$name."','".$email."','".$pass."','".$status."')";
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg','Thêm mới thành công',time()+5);
        header('Location: categories.php');
    }else{
        setcookie('msg','Thêm mới không thành công',time()+5);
        header('Location: category_add.php');
    }

?>