<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">Create New Event</h2>
        <form action="save_event.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Event Title</label>
                <input type="text" name="title" class="form-control" required placeholder="Enter event title">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3" required placeholder="Enter event description"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" required placeholder="Enter event location">
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Created by</label>
                <input type="text" name="created by" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Create Event</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>