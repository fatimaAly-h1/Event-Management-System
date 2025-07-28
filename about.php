<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - Event Pro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php  include 'navbar.php'; ?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html">Event Pro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">About Event Pro</h2>
      <p class="lead text-center">Your go-to platform for managing, organizing, and tracking events with ease and professionalism.</p>

      <div class="row mt-5">
        <div class="col-md-6">
          <h4>Who We Are</h4>
          <p>Event Pro is a web-based event management solution built by students and developers to help streamline event creation and participation. Our mission is to simplify the event process for both organizers and attendees.</p>
        </div>
        <div class="col-md-6">
          <h4>What We Do</h4>
          <p>From user registration and login, to creating and listing events — we provide all the tools necessary to plan successful events. Our system also includes secure user management and data handling.</p>
        </div>
      </div>

      <div class="row text-center mt-5">
        <div class="col-md-4">
          <h5>🎯 Mission</h5>
          <p>Deliver simple yet powerful event solutions.</p>
        </div>
        <div class="col-md-4">
          <h5>👨‍💻 Technology</h5>
          <p>Built using HTML, CSS, Bootstrap, PHP & MySQL.</p>
        </div>
        <div class="col-md-4">
          <h5>🌐 Vision</h5>
          <p>Empower anyone to host impactful events online.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      &copy; 2025 EventPro. All rights reserved.
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>