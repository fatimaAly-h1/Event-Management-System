<?php
session_start();
include('connection.php'); // Make sure this file name is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if both fields are filled
    if (empty($email) || empty($password)) {
        echo "<script>alert('Please enter both email and password'); window.location.href='login.php';</script>";
        exit();
    }

    // Fetch user with matching email
    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Check password using password_verify
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];  // You can use this in dashboard
            $_SESSION['user_id'] = $row['id']; // Optional, if needed later

            echo "<script>alert('Login successful'); window.location.href='dashboard.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect password'); window.location.href='login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('User not found'); window.location.href='login.php';</script>";
        exit();
    }
} else {
    // If the page is accessed without POST method
    header("Location: login.php");
    exit();
}
?>