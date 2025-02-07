<?php
require 'config.php';

// Start session
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: add.php');
    exit;
}

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if user exists
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        // Set session variables
        $_SESSION['user_id'] = $username;
        header('Location: add_product.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>