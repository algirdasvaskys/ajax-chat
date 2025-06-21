<?php
require 'db_connection.php';

$username = $_POST['username'] ?? '';
$message = $_POST['message'] ?? '';

if (!empty($username) && !empty($message)) {
    $stmt = $pdo->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
    $stmt->execute([$username, $message]);
}
?>
