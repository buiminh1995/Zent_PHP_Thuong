<?php
    session_start();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    ${'info'.$id} = array();
    ${'info'.$id}['id'] = $id;
    ${'info'.$id}['name'] = $name;
    ${'info'.$id}['phone'] = $phone;
    ${'info'.$id}['email'] = $email;
    ${'info'.$id}['gender'] = $gender;
    ${'info'.$id}['address'] = $address;
    
    $_SESSION['info'.$id] = ${'info'.$id};
    setcookie('msg','Thêm mới thành công',time()+5);
    
    header('Location: list.php');

?>