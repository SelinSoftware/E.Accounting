
<?php
require "config.php";
$name = $_POST['username'];
$pass = $_POST['password'];
if (!empty($name) && !empty($pass)) {
    $s = "select * from users where username = '$name' && password = '$pass' ";
    $result = mysqli_query($con, $s);
    $num1 = mysqli_num_rows($result);
    if ($num1 == 1) {
        $getUserData = mysqli_fetch_all($result);
        $_SESSION["userData"] = ["user_id" => $getUserData[0][0], "username" => $getUserData[0][1]];
        header('location:Home.php');
    } else {
        header('location:Login_Register.php');
    }
} else {
    header('location:Login_Register.php');
}

?>

