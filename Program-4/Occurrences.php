<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>countWordOccurrences</title>
</head>
<body>


</body>
</html>
<?php


function countWordOccurrences($paragraph) {


    $normalizedParagraph = strtolower($paragraph);
    $normalizedParagraph = preg_replace('/[^\w\s]/', '', $normalizedParagraph);




    $words = explode(' ', $normalizedParagraph);




    $wordCount = array();
    foreach ($words as $word) {
        if (!empty($word)) {
            if (isset($wordCount[$word])) {
                $wordCount[$word]++;
            } else {
                $wordCount[$word] = 1;
            }
        }
    }


    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Word</th><th>Count</th></tr>";


    foreach ($wordCount as $word => $count) {
        echo "<tr><td>" . htmlspecialchars($word) . "</td><td>" . htmlspecialchars($count) . "</td></tr>";
    }


    echo "</table>";
}


$paragraph = "This is a test. This test is only a test.";
countWordOccurrences($paragraph);


?>
