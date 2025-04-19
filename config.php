<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'brewbuzz_db');
define('DB_PORT', 3307);
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_general_ci');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($connect, DB_CHARSET);
if ($connect) {
    echo "Connected successfully";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>