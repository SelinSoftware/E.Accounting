<?php

require "config.php";
header('location:Invoice_Form.php');



$i_no = $_POST['invoice_no'];
$c_name =$_POST['company_name'];
$i_amount =$_POST['invoice_amount'];
$c_p_num =$_POST['company_phone_number'];
$id =$_SESSION['userData']["user_id"];

$s = "select * from invoices where invoice_no = '$i_no' && company_name = '$c_name' && invoice_amount = '$i_amount' && company_phone_number = '$c_p_num' && user_id = '$id'";
$result =mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num ==1){
    echo "record already taken";
}

else{
    if (!empty($i_no) && !empty($c_name) && !empty($i_amount) && !empty($c_p_num) && !empty($id)) {
        $reg = " insert into invoices (user_id,invoice_no,company_name,invoice_amount, company_phone_number) values ('$id','$i_no', '$c_name', '$i_amount' , '$c_p_num')";
        mysqli_query($con, $reg);
        echo "recording is successfull";
    }
}



?>