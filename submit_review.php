<?php
session_start(['cookie_httponly' => true]);
require_once 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['error'] = 'Invalid request method.';
    header('Location: index.php');
    exit;
}

$coffee_name = filter_input(INPUT_POST, 'coffee_name', FILTER_SANITIZE_STRING);
$rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

if (!$coffee_name || !$rating || !$comment || $rating < 1 || $rating > 5) {
    $_SESSION['error'] = 'Invalid input data.';
    header('Location: index.php');
    exit;
}

$stmt = $connect->prepare("INSERT INTO reviews (coffee_name, rating, comment) VALUES (?, ?, ?)");
$stmt->bind_param('sis', $coffee_name, $rating, $comment);

if ($stmt->execute()) {
    $_SESSION['success'] = 'Review submitted successfully!';
} else {
    $_SESSION['error'] = 'Failed to save review.';
}

$stmt->close();
header('Location: index.php');
exit;
?>