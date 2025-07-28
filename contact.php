<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - EventPro</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container mt-5">
    <h2 class="mb-4">Contact Us</h2>
    <p>If you have any questions, feedback, or need support, feel free to reach out to us using the form below:</p>

    <form action="save_contact.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Your Message</label>
        <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>

</body>
</html>