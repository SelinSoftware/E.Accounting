<?php

require "config.php";
$id = $_SESSION["userData"]["user_id"];
$s = "select invoice_no, company_name,invoice_amount, company_phone_number,users.username from invoices INNER JOIN users ON invoices.user_id = users.user_id WHERE invoices.user_id = '$id' ORDER BY create_date DESC";
$result = mysqli_query($con, $s);


?>


<html>

<head>
<title>Invioce Records</title>
</head>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Invoice Record List</title>
    <link rel="stylesheet" type="text/css" href="./assets/main.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
</head>

<body>
    <main class="record-list">
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
            <p class="content-header">Invoice Record List</p>
            <table width="600" border="1" cellpaddin="1" cellspacing="1">
                <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Company Name</th>
                        <th>Invoice Amount</th>
                        <th>Company Phone Number</th>
                        <!-- <th>UserName</th> -->
                    <tr>
                </thead>
                <tbody>
                    <?php
                        while ($invoice = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $invoice['invoice_no'] . "</td>";
                            echo "<td>" . $invoice['company_name'] . "</td>";
                            echo "<td>" . $invoice['invoice_amount'] . "</td>";
                            echo "<td>" . $invoice['company_phone_number'] . "</td>";
                            // echo "<td>" . $invoice['username'] . "</td>";
                            echo "</tr>";
                        }
                    
                    ?>
                </tbody>
                
            </table>
            <a class="page-link" href="Add_Invoice.php">Edit New Invoice Record</a>
        </div>
    </main>
</body>
</html>
