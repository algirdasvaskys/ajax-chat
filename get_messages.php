<?php
require 'db_connection.php';

$stmt = $pdo->query("SELECT username, message FROM messages ORDER BY id DESC LIMIT 50");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(array_reverse($messages));
?>
