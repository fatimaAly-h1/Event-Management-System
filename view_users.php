<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Registered Users</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM users"; // ✅ table must be 'users'
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                   while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";

    echo "<td>
            <a href='update_user.php?id=" . $row['id'] . "' 
               class='btn btn-sm btn-warning'>Edit</a>
          </td>";

    echo "<td>
            <a href='delete_user.php?id=" . $row['id'] . "' 
               class='btn btn-danger btn-sm' 
               onclick=\"return confirm('Are you sure you want to delete this user?');\">
               Delete
            </a>
          </td>";

    echo "</tr>";
}
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>