<?php


header('location:Customer_Form.php');

require "config.php";

$c_name = $_POST['customer_name'];
$i_no =$_POST['invoice_no'];
$i_amount =$_POST['invoice_amount'];
$p_num =$_POST['phone_number'];
$id =$_SESSION['userData']["user_id"];

$s = "select * from customers where customer_name = '$c_name' && invoice_no = '$i_no' && invoice_amount = '$i_amount' && phone_number = '$p_num' && user_id = '$id'";
$result =mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num ==1){
    echo "record already taken";
}

else{
    if (!empty($c_name) && !empty($i_no) && !empty($i_amount) && !empty($p_num) && !empty($id)) {
        $reg = "insert into customers (user_id,customer_name,invoice_no,invoice_amount,phone_number) values ('$id','$c_name', '$i_no', '$i_amount' , '$p_num')";
        mysqli_query($con, $reg);
        echo "recording is successfull";
    }
}



?>