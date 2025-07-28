<?php
include 'connection.php'; // Make sure this file is correct and connects to event_db

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Basic validation (optional)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Insert into messages table
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Message sent successfully'); window.location.href='contact.php';</script>";
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('All fields are required.'); window.location.href='contact.php';</script>";
    }
}
?>