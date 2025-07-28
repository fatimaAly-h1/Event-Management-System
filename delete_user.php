<?php
session_start();
include('connection.php'); // Make sure the file name is correct

// Check if ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use prepared statement to delete user safely
    $stmt = mysqli_prepare($mysqli, "DELETE FROM users WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id); // "i" = integer

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('User deleted successfully.'); window.location.href='view_users.php';</script>";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('No user ID provided.'); window.location.href='view_users.php';</script>";
}
?>