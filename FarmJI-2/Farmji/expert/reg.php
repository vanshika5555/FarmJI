<?php
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Verify user and password
if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $username;

        $redirectPage = isset($_GET['redirect']) ? $_GET['redirect'] : 'info.html';
        
        // Redirect to the page specified in the 'redirect' parameter or to index.php
        header("Location: $redirectPage");
    } else {
        echo "Invalid password!";
    }
} else {
    echo "User not found!";
}

$stmt->close();
$conn->close();
?>
