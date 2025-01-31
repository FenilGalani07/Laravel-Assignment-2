<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>


<h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
<p>You are now logged in.</p>
<a href="logout.php">Logout</a>


</body>
</html>
