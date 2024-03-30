<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Jewelry for You</title>
    <link href="css/loginReg.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="all">
        <header>
            <h1>Welcome back, Admin</h1>
            <nav id="nav">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="adm.php">Admin</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </header>
        <main id="web">
            <div id="logo">
                <img src="pics/jw.jpg" alt="Jewelry Logo">
            </div>
            <div id="login">
                <form id="loginform" method="post" action="account.php">
                    <div class="form-group">
                        <label for="username" class="label">Username:</label>
                        <input type="text" required id="username" name="username" class="lgn" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="label">Password:</label>
                        <input type="password" required id="password" name="password" class="lgn" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="login">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <p>Welcome back to the admin panel of Jewelry for You.</p>
        </footer>
    </div>
</body>
</html>
