<?php
include('layout/header.php');
require_once 'includes/config.php'; // Make sure the database connection is included

// Fetch all contact messages
$query = "SELECT name, email, message, created_at FROM contact_messages ORDER BY created_at DESC";
$result = $connect->query($query);

?>

<section class="form-section container animate-fade-in">
  <div class="form-card">
    <h2>تواصل معنا</h2>
    <form id="contactForm" class="modern-form" method="POST" action="contact_handler.php">
      <div class="form-group">
        <label for="name">الاسم</label>
        <input type="text" id="name" name="name" required aria-required="true" placeholder="أدخل اسمك">
      </div>
      <div class="form-group">
        <label for="email">البريد الإلكتروني</label>
        <input type="email" id="email" name="email" required aria-required="true" placeholder="أدخل بريدك الإلكتروني">
      </div>
      <div class="form-group">
        <label for="message">الرسالة</label>
        <textarea id="message" name="message" required aria-required="true" placeholder="أدخل رسالتك"></textarea>
      </div>
      <p id="contactError" class="error" role="alert"></p>
      <button type="submit" class="btn btn-circle animate-pulse">إرسال الرسالة</button>
    </form>
  </div>

  <!-- Display Submitted Contact Messages -->
  <div class="messages-list">
    <h2>رسائل تم تلقيها</h2>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="message-card">';
            echo '<h4>' . htmlspecialchars($row['name']) . ' <span>' . htmlspecialchars($row['email']) . '</span></h4>';
            echo '<p>' . htmlspecialchars($row['message']) . '</p>';
            echo '<p class="message-date">تم الاستلام في: ' . $row['created_at'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>لا توجد رسائل حالياً.</p>';
    }
    ?>
  </div>
</section>

<?php include('layout/footer.php'); ?>
