

<?php

session_start();

// ✅ Check if user is logged in
if (!isset($_SESSION['email'])) {
    // Not logged in, redirect to login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <div class="container mt-5">
  <h2 class="mb-4 text-center">Welcome to Our Dashboard</h2>

  <div class="row justify-content-center g-4">

    <div class="col-md-4">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Create Event</h5>
          <p class="card-text">Submit a new event to the system.</p>
          <a href="create_event.php" class="btn btn-primary">Create</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">View Events</h5>
          <p class="card-text">See all events added to the database.</p>
          <a href="view_events.php" class="btn btn-secondary">View</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Contact Messages</h5>
          <p class="card-text">Read messages submitted by users.</p>
          <a href="view_messages.php" class="btn btn-success">View Messages</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Logout</h5>
          <p class="card-text">Logout and go back to site.</p>
          <a href="logout.php" class="btn btn-secondary">Logout</a>
        </div>
      </div>
    </div>


  </div>
</div>

</body>
</html>