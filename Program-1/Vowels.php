<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>


</body>
</html>
<?php
function countVowels($string) {
    $vowels = 'aeiouAEIOU';
    $count = 0;




    for ($i = 0; $i < strlen($string); $i++) {


        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }


    return $count;
}




$inputString = "Hello World!";
echo "Number of vowels in '$inputString': " . countVowels($inputString);
?>

