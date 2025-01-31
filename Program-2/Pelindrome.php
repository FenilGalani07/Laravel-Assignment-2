<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelindrome</title>
</head>
<body>


</body>
</html>
<?php
function isPalindrome($string) {


    $cleanedString = preg_replace("/[^A-Za-z0-9]/", '', $string);
    $cleanedString = strtolower($cleanedString);

    $reversedString = strrev($cleanedString);

    return $cleanedString === $reversedString;
}

$inputString = "A man, a plan, a canal, Panama!";
if (isPalindrome($inputString)) {
    echo "'$inputString' is a palindrome.";
} else {
    echo "'$inputString' is not a palindrome.";
}
?>
