<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
    
</body>
</html>

<?php


session_start();


if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {


    $visit_count = 1;
}


setcookie('visit_count', $visit_count, time() + (86400 * 1), "/"); 
echo "<h2>You have visited this page $visit_count time(s).</h2>";
?>
