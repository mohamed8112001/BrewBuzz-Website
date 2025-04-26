<?php
require_once 'includes/config.php';

session_start();
// Validate and sanitize input
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (empty($email) || empty($password)) {
    $_SESSION['error'] = 'Invalid input data.';
    header('Location: login.php');
    exit;
}

// Fetch user from the database
$stmt = $connect->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email); // "s" for string
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// $password_hashed = password_hash($password, PASSWORD_DEFAULT); // Hash password
if ($user['email'] == $email  && $password == $user['password']) {
    // Password is correct, set session variables
    $userId = $user['id'];
    $userName = $user['name'];
    $_SESSION['success'] = 'تم تسجيل الدخول بنجاح!';
    // Set session variables
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $userName;
    header('Location: index.php');
    exit;
} else {
    // Password is incorrect
    $_SESSION['error'] = 'البريد الإلكتروني أو كلمة المرور غير صحيحة.';
    header('Location: login.php');
    exit;
}
$stmt->close();
var_dump($_SESSION); // Debugging line to check the session data
?>