<?php
session_start();
include("connection.php");

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $created_by = $_SESSION['email'];

    $query = "INSERT INTO events (title, description, location, date, created_by) 
              VALUES ('$title', '$desc', '$location', '$date', '$created_by')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Event Created Successfully'); window.location.href='view_events.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='create_event.php';</script>";
    }
}
?>