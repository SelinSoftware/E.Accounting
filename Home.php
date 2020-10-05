<?php

session_start();
if (!isset($_SESSION['userData'])) {
    header('location:Login_Register.php');
}

?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="./assets/main.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
</head>
<body class="homepage">
    <div class="nav-bar">
        <div class="nav-header">Easy Accounting</div>
        <div class="nav-right">
            <a class="nav-link" href="About_us.php">About us</a>
            <a class="logout-btn" href="Logout.php">Logout</a>
        </div>
    </div>
    <div class="page-content">
    <h1>Welcome <?= $_SESSION['userData']["username"] ?> </h1>
        <div class="page-layout">
            <div class="homepage-buttons">
                <p class="sub-header">You can track your account and add new records easily.</p>
                <div class="my-acc-item">
                    <a class="invoice-btn acc-btn" href='Invoice.php'>Invoice Records</a>
                    <a class="add-btn" href="Invoice_Form.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 426.667 426.667"><path d="M0 64h256v42.667H0zM0 149.333h256V192H0zM0 234.667h170.667v42.667H0zM341.333 234.667v-85.334h-42.666v85.334h-85.334v42.666h85.334v85.334h42.666v-85.334h85.334v-42.666z"/></svg>
                    </a>
                </div>
                <div class="my-acc-item">
                    <a class="customer-btn acc-btn" href='Customer.php'>Customer Records</a>
                    <a class="add-btn" href="Customer_Form.php">
                        <svg viewBox="0 0 512 512">
                            <path d="M256 0a148 148 0 00-84 270A255 255 0 000 512h40c0-119 97-216 216-216a148 148 0 000-296zm0 256a108 108 0 110-216 108 108 0 010 216zM428 388v-84h-40v84h-84v40h84v84h40v-84h84v-40z"/>
                        </svg>
                    </a>
                </div>
                <div class="my-acc-item">
                    <a class="inv-exp-btn acc-btn" href='Income_Expense.php'>Accounting Tracking</a> 
                </div>
            </div>
            <div class="screen-image">
                        <svg data-name="Layer 1" viewBox="0 0 606 650">
                            <path fill="#e6e6e6" d="M597 628c-14 19-44 21-44 21s-7-29 8-49 44-21 44-21 6 29-8 49z"/>
                            <path fill="#e6e6e6" d="M524 635c9 13 29 14 29 14s4-19-5-32-30-14-30-14-4 19 6 32z"/>
                            <path fill="#3f3d56" d="M588 650H330v-2h258v2z"/>
                            <path fill="#e6e6e6" d="M0 19h578v321H0z"/>
                            <path fill="#fff" d="M32 308h515V50H32z"/>
                            <path fill="#5491c1" d="M1 0h577v29H1z"/>
                            <path fill="#e6e6e6" d="M61 141h105v74H61zM228 141h289v9H228zM228 175h289v9H228zM228 209h289v9H228z"/>
                            <path fill="#2f2e41" d="M423 346l-3 16s-13 38-10 73l7 60s-11 89-7 121c0 0 12 15 26-1l12-117 12-83 10 93 7 105s10 11 25 2l-1-120s12-102 10-110-16-42-16-42z"/>
                            <path fill="#2f2e41" d="M416 616l1 15s-11 17 2 17c10 0 19 4 18-5l-2-14-3-15zM498 616l-1 15s11 17-3 17c-9 0-18 4-17-5l2-14 2-15z"/>
                            <circle cx="455.8" cy="201.3" r="22.6" fill="#9f616a"/>
                            <path fill="#ffb8b8" d="M446 216s3 33-6 37 36 3 36 3-10-38-10-42z"/>
                            <path fill="#5491c1" d="M489 237s-29-13-68 0c0 0-17 4-19 10s23 70 20 82a61 61 0 00-1 21s62-9 77-2c0 0-6-19-4-31l13-72s-6-7-18-8z"/>
                            <path fill="#9f616a" d="M513 405s-10 32 1 33 6-25 6-25l-1-8z"/>
                            <path fill="#5491c1" d="M492 249l15-4s8 6 8 14l-1 63 11 81-17 6-19-88z"/>
                            <path fill="#9f616a" d="M398 405s10 32-1 33-6-25-6-25l1-8z"/>
                            <path fill="#5491c1" d="M419 249l-15-4s-8 6-8 14l1 63-11 81 17 6 19-88z"/>
                            <path fill="#2f2e41" d="M466 168s-20-3-24 23-2 36-9 38-10 7-8 12 6 8-1 19 16 8 34 16 61-4 55-13-15-6-11-17 6-14 0-21 3-51-36-57z"/>
                        </svg>
                    </div>
        </div>
    </div>
</body>
</html>

