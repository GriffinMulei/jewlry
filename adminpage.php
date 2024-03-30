<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover exquisite jewelry for every occasion at Jewelry for You. Explore our wide selection of high-quality pieces today.">
    <title>Home | Jewelry for You</title>
    <link rel="icon" href="pics/jw.png" type="image/png">
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <link href="css/pages.css" rel="stylesheet" type="text/css">
    <?php include_once("head.php"); ?>
</head>
<body>
    <header>
        <?php include_once("header.php"); ?> <!-- Navigation is typically included within the header for better semantic structure. -->
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="../about/index.html">Help</a></li>
                <li><a href="login.php">Sign up | Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section aria-labelledby="welcome-heading">
            <h1 id="welcome-heading">Welcome to Jewelry for You</h1>
            <p>Your destination for exquisite jewelry.</p>
        </section>
    </main>

    <aside>
        <!-- Additional content that supports the main content can go here -->
        <p>Check out our latest collections on sale!</p>
    </aside>

    <footer>
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>
