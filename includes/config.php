<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'brewbuzz_db');
define('DB_PORT', 3307);
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_general_ci');

try {
    $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    if ($connect->connect_error) {
        throw new Exception("Connection failed: " . $connect->connect_error);
    }
    $connect->set_charset(DB_CHARSET);
} catch (Exception $e) {
    // Log error to file instead of displaying
    error_log($e->getMessage(), 3, 'logs/db_errors.log');
    http_response_code(500);
    exit('Database connection error. Please try again later.');
}
?>