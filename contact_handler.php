<?php
require_once 'includes/config.php';


// Validate and sanitize input
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

var_dump($_POST); // Debugging line to check the input data
if (!$name || !$email || !$message) {
    $_SESSION['error'] = 'Invalid input data.';
    header('Location: contact.php');
    exit;
}

// Insert message into the database
$stmt = $connect->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param('sss', $name, $email, $message);

if ($stmt->execute()) {
    $_SESSION['success'] = 'Your message has been sent successfully!';
    header('Location: contact.php');
} else {
    $_SESSION['error'] = 'Failed to send your message.';
    header('Location: contact.php');
}

$stmt->close();
?>
