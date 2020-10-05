<?php

require "config.php";

$id = $_SESSION["userData"]["user_id"];
$s = "select customer_name,invoice_no, invoice_amount, phone_number,users.username from customers INNER JOIN users ON customers.user_id = users.user_id WHERE customers.user_id = '$id' ORDER BY create_date DESC ";
$result = mysqli_query($con, $s);


?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Customer Records</title>
    <link rel="stylesheet" type="text/css" href="./assets/main.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
</head>
<body class="customer-records">
<div class="nav-bar">
            <div class="nav-header">Easy Accounting</div>
            <div class="nav-right">
                <a class="nav-link" href="About_us.php">About us</a>
                <a class="logout-btn" href="Logout.php">Logout</a>
            </div>
        </div>
        <div class="page-content">
        <a class="home-link" href="Home.php">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            </span>
            Return HomePage
        </a>
        <p class="content-header">Customer Record List</p>
        <table width="600" border="1" cellpaddin="1" cellspacing="1">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Invoice No</th>
                    <th>Invoice Amount</th>
                    <th>Phone Number</th>
                    <!-- <th>UserName</th> -->
                <tr>
            </thead>
            <tbody>
                <?php
                    while($customer = mysqli_fetch_assoc($result)){
                        
                        echo "<tr>";

                        echo "<td>".$customer['customer_name']."</td>";
                        
                        echo "<td>".$customer['invoice_no']."</td>";

                        echo "<td>".$customer['invoice_amount']."</td>";

                        echo "<td>".$customer['phone_number']."</td>";

                        // echo "<td>".$customer['username']."</td>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a class="page-link" href="Add_Customer.php">Edit New Customer Record</a>
        </div>
</body>
</html>
