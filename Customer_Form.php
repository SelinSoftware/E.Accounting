<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Edit Customer Record</title>
        <link rel="stylesheet" type="text/css" href="./assets/main.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        />
    </head>
<body class="record-page">
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
        <p class="content-header">New Customer Record</p>
        <div class="content-layout">
            <form action="Add_Customer.php" method="post">
                <div class="form-group">
                    <label>Customer Name:</label>
                    <input type="text" name="customer_name" required>
                </div>
                <div class="form-group">
                    <label>Invoice No:</label>
                    <input type="text" name="invoice_no" required>
                </div>
                <div class="form-group">
                    <label>Invoice Amount:</label>
                    <input type="text" name="invoice_amount" required>
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="text" name="phone_number" required>
                </div>
                <button class="btn-record" type="submit">Save</button>
            </form>
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
        <a class="page-link" href="Customer.php">See Customers List</a>
    </div>
</body>
</html>