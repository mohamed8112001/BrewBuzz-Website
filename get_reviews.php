<?php
session_start(['cookie_httponly' => true]);
require_once 'includes/config.php';
header('Content-Type: application/json');

$result = $connect->query("SELECT coffee_name, rating, comment, created_at FROM reviews ORDER BY created_at DESC");
$reviews = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

echo json_encode($reviews);
?>