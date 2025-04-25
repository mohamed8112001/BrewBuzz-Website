<?php
require_once 'includes/config.php';

// Validate and sanitize input
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if (!$email || !$password) {
    $_SESSION['error'] = 'Invalid input data.';
    header('Location: login.php');
    exit;
}

// Fetch user from the database
$stmt = $connect->prepare("SELECT id, name, password FROM users WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($userId, $userName, $userPassword);
$stmt->fetch();

if ($stmt->num_rows > 0 && password_verify($password, $userPassword)) {
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $userName;
    header('Location: index.php');
} else {
    $_SESSION['error'] = 'Invalid email or password.';
    header('Location: login.php');
}

$stmt->close();
?>