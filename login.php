<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Jewelry for You</title>
    <link href="css/loginReg.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="all">
    <h1>Login to Jewelry for You</h1>
    <nav id="nav">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="adm.php">Admin</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
<div id="web">
    <div id="logo">
        <!-- Corrected image tag -->
        <img src="pics/jw.jpg" alt="Mountain View">
    </div>
    <div id="login">
        <!-- Revised form with semantic HTML -->
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
<p>
<marquee width="80%">Welcome back to Jewelery for u.</><p>Welcome back to Jewelry for You.</p>
</div>
</body>
</html>
