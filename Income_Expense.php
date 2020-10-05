<?php

require "config.php";
$id = $_SESSION["userData"]["user_id"];
$query = "select sum(income_amount)-sum(expense_amount) as net_value from balance Where user_id = '$id'";
$query_result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($query_result)) {
    !empty($row['net_value']) ? $output = "Net Value:" . " " . $row['net_value'] : $output = "Net Value: 0";
}
$query = "select balance.income_amount,balance.income_explanation,balance.expense_amount,balance.expense_explanation,users.username from balance INNER JOIN users ON balance.user_id = users.user_id WHERE balance.user_id = '$id' ORDER BY create_date DESC";
$query_result = mysqli_query($con, $query);

?>


<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Income-Expense Balance Tracking</title>
        <link rel="stylesheet" type="text/css" href="./assets/main.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        />
    </head>
<body class="income-expense">
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

        <table width="600" border="1" cellpaddin="1" cellspacing="1">
            <tr>
                <th>Income Amount</th>
                <th>Income Explanation</th>
                <th>Expense Amount</th>
                <th>Expense Explanation</th>
                <!-- <th>UserName</th> -->
            <tr>
            <h1>You can track your account easily here!</h1>
            <form action="Income_Expense_Form.php" method="post">
                <div class="form-group">
                    <label>Income Amount:</label>
                    <input type="text" name="income_amount" required>
                </div>
                <div class="form-group">
                    <label>Income Explanation:</label>
                    <input type="text" name="income_explanation" required>
                </div>
                <div class="form-group">
                    <label>Expense Amount:</label>
                    <input type="text" name="expense_amount" required>
                </div>
                <div class="form-group">
                    <label>Expense Explanation:</label>
                    <input type="text" name="expense_explanation" required>
                </div>
                <button class="btn-record" type="submit">Add Record</button>
                <div class="net-value">
                    <?php

                    echo $output;

                    ?>
                </div>
            </form>
            <?php
               while ($row = mysqli_fetch_assoc($query_result)) {
                echo "<tr>";
                echo "<td>" . $row ['income_amount'] . "</td>";
                echo "<td>" . $row ['income_explanation'] . "</td>";
                echo "<td>" . $row ['expense_amount'] . "</td>";
                echo "<td>" . $row ['expense_explanation'] . "</td>";
                // echo "<td>" . $row ['username'] . "</td>";
                echo "</tr>";
            }
            ?>
        </div>
</body>
</html>


