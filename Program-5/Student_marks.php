<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>


</body>
</html>
<?php


$students = array(
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "David" => 88,
    "Eva" => 76
);




$totalMarks = 0;
$numberOfStudents = count($students);


foreach ($students as $name => $marks) {
    $totalMarks += $marks;
}




$averageMarks = $totalMarks / $numberOfStudents;




echo "<h2>Student Marks</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Student Name</th><th>Marks</th></tr>";


foreach ($students as $name => $marks) {
    echo "<tr><td>" . htmlspecialchars($name) . "</td><td>" . htmlspecialchars($marks) . "</td></tr>";
}


echo "</table>";
echo "<h3>Average Marks: " . round($averageMarks, 2) . "</h3>";


?>
