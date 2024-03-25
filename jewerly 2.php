<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Jewelry for You</title>
    <link href="css/loginReg.css" rel="stylesheet" type="text/css"/>
    <!-- Ensure head.php does not duplicate any <head> elements -->
    <?php include_once("head.php"); ?>
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
            <img src="pics/jw.jpg" alt="Mountain View">
        </div>
        <div id="register">
            <!-- Updated form structure using semantic HTML -->
            <form id="loginform" method="post" action="account.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" required id="username" name="username" class="lgn" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" required id="email" name="email" class="lgn" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" required id="password" name="password" class="lgn" placeholder="Password">
                </div>
                <input type="submit" value="Register" class="register">
            </form>
        </div>
    </div>
    <!-- Using CSS animations instead of <marquee> -->
    <p class="marquee">Feel free to join Jewelry for You.</p>
</div>
<footer>
    <?php include_once("footer.php"); ?>
</footer>
</body>
</html>
