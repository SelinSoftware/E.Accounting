

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Sign In/Up</title>
        <link rel="stylesheet" type="text/css" href="./assets/main.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        />
    </head>
<body class="login-register">
    <div class="nav-bar">
        <div class="nav-header">Easy Accounting</div>
        <div class="nav-right">
            <a class="nav-link" href="About_us.php">About us</a>
            <a class="logout-btn" href="Logout.php">Logout</a>
        </div>
    </div>
    <div class="page-content">
        <h2 class="log-reg-header">WELCOME TO EASY ACCOUNTING</h2>
        <form action="Validation.php" method="post">    
            <p class="content-header">Sign in to your account</p>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button class="btn-login" type="submit">Login</button>
        </form>
        <form class="register-form" action="Registration.php" method="post">
            <p class="content-header">Create your account</p>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <button class="btn-register" type="submit">Register</button>
        </form>
    </div>  
</body>
</html>