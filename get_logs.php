<?php
require 'c:/xampp/htdocs/CallFlow/config/db.php';
$stmt = $pdo->query("SELECT * FROM webhook_logs ORDER BY id DESC LIMIT 5");
print_r($stmt->fetchAll());
?>
