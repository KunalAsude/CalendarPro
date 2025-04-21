<?php
require 'includes/db.php';

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $stmt = $conn->prepare("INSERT INTO events (title, start_datetime, end_datetime) VALUES (?, ?, ?)");
    $stmt->execute([$title, $start, $end]);
}
?>
