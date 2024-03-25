<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back Admin</title>
    <link href="css/loginReg.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="all">
    <h1>Welcome back Admin</h1>
    <nav id="nav">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="adm.php">Admin</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <div id="web">
        <div id="logo">
            <img src="pics/jw.jpg" alt="Mountain View">
        </div>
        <div id="login">
            <form id="loginform" method="post" action="account.php">
                <div class="form-group">
                    <label for="username" class="label">Username:</label>
                    <input type="text" required id="username" name="username" class="lgn" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password" class="label">Password:</label>
                    <input type="password" required id="password" name="password" class="lgn" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="login">
                </div>
            </form>
        </div>
    </div>
    <p class="welcome-message">Welcome back Admin.</p>
</div>
</body>
</html>
