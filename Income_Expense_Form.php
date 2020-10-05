<?php
header('location:Income_Expense.php');
require "config.php";
$income = $_POST['income_amount'];
$exp1 =$_POST['income_explanation'];
$expense =$_POST['expense_amount'];
$exp2 =$_POST['expense_explanation'];
$id = $_SESSION["userData"]["user_id"];
$s="select * from balance where income_amount = '$income' && income_explanation = '$exp1' && expense_amount = '$expense' && expense_explanation = '$exp2' && user_id ='$id'";
$result =mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num ==1){
    echo "record already taken";
}
else{
    $reg =" insert into balance (user_id,income_amount, income_explanation, expense_amount, expense_explanation) values ('$id','$income', '$exp1', '$expense' , '$exp2')";
    mysqli_query($con, $reg);
    echo "recording is successfull";
}