<?php
session_start();
// Assuming you have a database connection setup as $db
require 'db_connection.php'; // Adjust this line according to your actual database connection setup

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    error_log("Login attempt for user: $username");

    // Fetch user from the database
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        error_log("User found in database: " . $user['username']);
        // Verify password
        if (password_verify($password, $user['password'])) {
            error_log("Password verified for user: " . $user['username']);
            // Authentication successful, set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            // Redirect to another page or show a success message
            header("Location: dashboard.php"); // Adjust the location as needed
            exit;
        } else {
            error_log("Password verification failed for user: " . $user['username']);
            // Handle login failure
            echo "Invalid username or password.";
        }
    } else {
        error_log("User not found in database: $username");
        // Handle user not found
        echo "Invalid username or password.";
    }
}
?>
