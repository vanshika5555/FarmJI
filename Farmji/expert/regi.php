<?php
require 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure password hashing

// Check if user exists
$checkUser = $conn->prepare("SELECT * FROM users WHERE username = ?");
$checkUser->bind_param("s", $username);
$checkUser->execute();
$result = $checkUser->get_result();

if ($result->num_rows > 0) {
    echo "Username already exists!";
    exit();
}

$checkUser->close();

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
    header("Location: login.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
