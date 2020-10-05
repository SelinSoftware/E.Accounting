<?php

header('location:Login_Register.php');
require "config.php";
$name = $_POST['username'];
$pass = $_POST['password'];

if (!empty($name) && !empty($pass)){
    $s = "select * from users where username = '$name' ";
    $result = mysqli_query($con, $s);
    $num2 = mysqli_num_rows($result);
    if ($num2 == 1) {
        echo "username already taken";
    } else {
        $reg = " insert into users (username, password) values ('$name', '$pass')";
        mysqli_query($con, $reg);
        echo "registration is successfull";
    }
} else {
    header('location:Login_Register.php');
}



?>