<?php
    require_once('../connection.php');
    $id = $POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $query = "UPDATE authors SET name = '".$title."', email='".$description."', status='".$status."' WHERE id=".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg','Cập nhật thành công',time()+5);
        header('Location: categories.php');
    }else{
        setcookie('msg','Cập nhật không thành công',time()+5);
        header('Location: category_edit.php?id='.$id);
    }

?>