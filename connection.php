<?php
$host = "localhost";
$username = "root";
$password = ""; // leave empty if no password
$database = "event_db"; // ✅ make sure this matches your database name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>