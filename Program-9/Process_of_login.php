<?php
session_start();

$valid_username = "user";
$valid_password = "password";

$username = $_POST['username'];
$password = $_POST['password'];


if ($username === $valid_username && $password === $valid_password) {


    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit();
} else {


    echo "<h3>Invalid username or password. Please try again.</h3>";
    echo '<a href="login.php">Back to Login</a>';
}
?>
