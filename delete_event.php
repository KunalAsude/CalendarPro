<?php
// Include the database connection
require 'includes/db.php';

// Check if the event ID is set in the POST request
if (isset($_POST['id'])) {
    $id = $_POST['id']; // Get the event ID from the POST request

    // Prepare and execute the SQL statement to delete the event
    $stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
    $stmt->execute([$id]);
}
?>
