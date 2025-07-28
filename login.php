<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<script>
  function togglePassword() {
    var passInput = document.getElementById("password");
    if (passInput.type === "password") {
      passInput.type = "text";
    } else {
      passInput.type = "password";
    }
  }
</script>
<body>
<div class="container mt-5">
    <h2>User Login</h2>
    <form action="login_user.php" method="POST">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" id="password" name ="password" placeholder="Enter your password here." class="form-control" required>
            <input type ="checkbox" onclick="togglePassword()" required>Show Password
        </div>
        <button type="submit" name ="login" class="btn btn-primary">Login</button>

    </form>
</div>
<script src="script.js"></script>
</body>
</html>