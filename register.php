<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Jewelry for You</title>
    <link rel="stylesheet" href="css/loginReg.css" type="text/css">
    <!-- Consider hosting your CSS and other resources over HTTPS to avoid mixed content warnings -->
</head>
<body>
<div id="all">
    <header>
        <h1>Register to Jewelry for You</h1>
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

        <div id="register">
            <form id="registrationForm" method="post" action="account.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" required name="username" id="username" class="lgn" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" required name="email" id="email" class="lgn" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" required name="password" id="password" class="lgn" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" class="register">
                </div>
            </form>
        </div>
    </main>

    <!-- Currency Converter Widget, ensure HTTPS is used for external resources -->
    <div>
        <script>
            function loadCurrencyConverter() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://freecurrencyrates.com/en/widget-horizontal-editable?iso=EURGBPUSD&df=2&p=F2d85tAG0&v=s&source=fcr&width=400&width_title=200&firstrowvalue=1.00&thm=aaaaaa,ffffff,aaaaaa,cccccc,222222,C5C5c5,aaaaaa,212121,000000&title=Currency%20Converter&tzo=-180';
                document.body.appendChild(script);
            }
            window.onload = loadCurrencyConverter;
        </script>
    </div>

    <!-- Replacing <marquee> with a CSS-based animation or static text -->
    <footer>
        <p>Feel free to join Jewelry for You.</p>
    </footer>
</div>
</body>
</html>
