<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include 'connection.php';

// Step 1: Get event ID from URL
if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    // Step 2: Fetch existing event details
    $sql = "SELECT * FROM events WHERE id = $event_id";
    $result = mysqli_query($conn, $sql);
    $event = mysqli_fetch_assoc($result);

    if (!$event) {
        echo "<script>alert('Event not found'); window.location.href='view_events.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid request'); window.location.href='view_events.php';</script>";
    exit();
}

// Step 3: Handle form submission (update)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $date = $_POST['date'];

    $update_sql = "UPDATE events SET 
                    title = '$title', 
                    description = '$description', 
                    location = '$location', 
                    date = '$date' 
                   WHERE id = $event_id";

    if (mysqli_query($conn, $update_sql)) {
        echo "<script>alert('Event updated successfully'); window.location.href='view_events.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Event - EventPro</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container mt-5">
    <h2>Edit Event</h2>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($event['title']) ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="4" required><?= htmlspecialchars($event['description']) ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Location</label>
        <input type="text" name="location" class="form-control" value="<?= htmlspecialchars($event['location']) ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="date" name="date" class="form-control" value="<?= $event['date'] ?>" required>
      </div>

      <button type="submit" class="btn btn-primary">Update Event</button>
      <a href="view_events.php" class="btn btn-secondary">Cancel</a>
    </form>
  </div>

</body>
</html>