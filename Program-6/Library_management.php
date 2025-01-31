<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>
</body>
</html>
<?php


$library = array(
    array(
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "year" => 1925
    ),
    array(
        "title" => "The Road",
        "author" => "Cormac McCarthy",
        "year" => 2006
    ),
    array(
        "title" => "The Testaments",
        "author" => "Margaret Atwood",
        "year" => 2019
    ),
    array(
        "title" => "Where the Crawdads Sing",
        "author" => "Delia Owens",
        "year" => 2018
    ),
    array(
        "title" => "Educated",
        "author" => "Tara Westover",
        "year" => 2018
    ),
    array(
        "title" => "The Silent Patient",
        "author" => "Alex Michaelides",
        "year" => 2019
    ),
    array(
        "title" => "Becoming",
        "author" => "Michelle Obama",
        "year" => 2018
    ),
    array(
        "title" => "The Midnight Library",
        "author" => "Matt Haig",
        "year" => 2020
    )
);


echo "<h2>Books Published After 2015</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Title</th><th>Author</th><th>Year</th></tr>";
foreach ($library as $book) {
    if ($book['year'] > 2015) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($book['title']) . "</td>";
        echo "<td>" . htmlspecialchars($book['author']) . "</td>";
        echo "<td>" . htmlspecialchars($book['year']) . "</td>";
        echo "</tr>";
    }
}
echo "</table>";


?>


