<?php
// Include the database connection
require 'includes/db.php';

// Check if the event ID and other event details are set in the POST request
if (isset($_POST['id'])) {
    $id = $_POST['id']; // Get the event ID
    $title = $_POST['title']; // Get the event title
    $start = $_POST['start']; // Get the event start date and time
    $end = $_POST['end']; // Get the event end date 

    // Prepare and execute the SQL statement to update the event
    $stmt = $conn->prepare("UPDATE events SET title = ?, start_datetime = ?, end_datetime = ? WHERE id = ?");
    $stmt->execute([$title, $start, $end, $id]);
}
?>
