<?php
require_once 'includes/config.php';
session_start(); // Ensure session is started

// Sanitize and validate input
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Perform server-side validation
if (!$name || !$email || !$password) {
    $_SESSION['error'] = 'All fields are required.';
    header('Location: register.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = 'Invalid email address.';
    header('Location: register.php');
    exit;
}

if (strlen($password) < 6) {
    $_SESSION['error'] = 'Password must be at least 6 characters long.';
    header('Location: register.php');
    exit;
}
if (strlen($name) < 2) {
    $_SESSION['error'] = 'Name must be at least 3 characters long.';
    header('Location: register.php');
    exit;
}
// Hash password and insert user
// $passwordHash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $connect->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param('sss', $name, $email, $password);

if ($stmt->execute()) {
    $_SESSION['success'] = 'Account created successfully!';
    header('Location: login.php');
    exit;
} else {
    $_SESSION['error'] = 'Failed to create account.';
    header('Location: register.php');
    exit;
}

$stmt->close();
?>
