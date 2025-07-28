<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include 'connection.php';

// Step 1: Check if event ID is provided
if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    // Step 2: Delete event
    $sql = "DELETE FROM events WHERE id = $event_id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Event deleted successfully'); window.location.href='view_events.php';</script>";
    } else {
        echo "Error deleting event: " . mysqli_error($conn);
    }
} else {
    echo "<script>alert('Invalid request'); window.location.href='view_events.php';</script>";
}
?>