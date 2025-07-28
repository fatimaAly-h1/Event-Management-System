<?php
include 'connection.php';

// Step 1: Get the user ID from the URL
$id = $_GET['id'];

// Step 2: Fetch the user's current data
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Update User</h2>
        <form action="" method="POST">
                
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Password:</label>
                <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>

<?php
// Step 3: If form submitted, update the record
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $updateQuery = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=$id";
    $runUpdate = mysqli_query($conn, $updateQuery);

    if ($runUpdate) {
        echo "<script>alert('User updated successfully!'); window.location.href='view_users.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>