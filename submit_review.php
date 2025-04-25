<?php
require_once 'includes/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $coffee_name = filter_input(INPUT_POST, 'coffee_name', FILTER_SANITIZE_STRING);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

    if (!$coffee_name || !$rating || !$comment || $rating < 1 || $rating > 5) {
        $_SESSION['error'] = 'Invalid input data.';
        header('Location: index.php');
        exit;
    }

    // Insert review into the database
    $stmt = $connect->prepare("INSERT INTO reviews (coffee_name, rating, comment) VALUES (?, ?, ?)");
    $stmt->bind_param('sis', $coffee_name, $rating, $comment);

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Review submitted successfully!';
    } else {
        $_SESSION['error'] = 'Failed to submit your review.';
    }

    $stmt->close();
    header('Location: index.php');
    exit;
}

// Fetch reviews from the database
$query = "SELECT coffee_name, rating, comment, created_at FROM reviews ORDER BY created_at DESC";
$result = $connect->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="review-card">';
        echo '<h4>' . htmlspecialchars($row['coffee_name']) . '</h4>';
        echo '<p>' . htmlspecialchars($row['comment']) . '</p>';
        echo '<div class="star-rating">';
        for ($i = 0; $i < $row['rating']; $i++) {
            echo '<i class="fas fa-star"></i>';
        }
        for ($i = $row['rating']; $i < 5; $i++) {
            echo '<i class="far fa-star"></i>';
        }
        echo '</div>';
        echo '<p class="review-date">تم التقييم في: ' . $row['created_at'] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No reviews yet.</p>';
}
?>