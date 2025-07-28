<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (name, email, password) 
          VALUES ('$name', '$email', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User registered successfully!');</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register - EventPro</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="col-md-6 offset-md-3 bg-white p-4 shadow rounded">
    <h2 class="mb-4 text-center">User Registration</h2>

    <form method="POST" action="register.php" onsubmit="return validateRegisterForm()">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
        <div class="form-check mt-2">
          <input type="checkbox" class="form-check-input" onclick="togglePassword()" id="showPass">
          <label class="form-check-label" for="showPass">Show Password</label>
        </div>
      </div>

      <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Validation + Password Toggle -->
<script>
  function togglePassword() {
    var passInput = document.getElementById("password");
    passInput.type = (passInput.type === "password") ? "text" : "password";
  }

  function validateRegisterForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    if (name === "" || email === "" || password === "") {
      alert("All fields are required.");
      return false;
    }

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }

    if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return false;
    }

    return true;
  }
</script>
</body>
</html>