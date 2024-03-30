<?php
session_start();
require 'db_connection.php'; // Ensure your DB connection is secure and uses PDO or similar
require 'rate_limiter.php'; // A hypothetical script to handle rate limiting

// Protect against CSRF by checking a token in the POST request (token should be generated and set in the session upon rendering the login form)
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF token validation failed.");
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']); // Trim to remove accidental space
    $password = $_POST['password'];

    // Implement rate limiting check
    if (checkRateLimit($username) === false) {
        // Redirect to login with error
        $_SESSION['error'] = "Too many attempts, please try again later.";
        header("Location: login.php");
        exit;
    }

    // Fetch user from the database
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Authentication successful, set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Consider regenerating session ID upon successful login
        session_regenerate_id(true);
        
        // Redirect to another page or show a success message
        header("Location: dashboard.php");
        exit;
    } else {
        // Increment rate limiting counter
        incrementRateLimit($username);

        // Generic error message for security
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: login.php");
        exit;
    }
}

// Implement a generic function to redirect to login page with a generic error message
function redirectToLoginWithError() {
    $_SESSION['error'] = "Invalid username or password."; // Generic error message
    header("Location: login.php");
    exit;
}
?>
