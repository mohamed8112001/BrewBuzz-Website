<?php
require_once 'includes/config.php';

// Validate and sanitize input
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if (!$name || !$email || !$password) {
    $_SESSION['error'] = 'Invalid input data.';
    header('Location: register.php');
    exit;
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash password

// Insert user into the database
$stmt = $connect->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param('sss', $name, $email, $passwordHash);

if ($stmt->execute()) {
    $_SESSION['success'] = 'Account created successfully!';
    header('Location: login.php');
} else {
    $_SESSION['error'] = 'Failed to create account.';
    header('Location: register.php');
}

$stmt->close();
?>