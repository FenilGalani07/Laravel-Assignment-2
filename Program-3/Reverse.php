
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>
<body>


</body>
</html>
<?php
function reverseWordsInSentence($sentence) {


    $words = explode(' ', $sentence);

    $reversedWords = array_map('strrev', $words);

    $reversedSentence = implode(' ', $reversedWords);

    return $reversedSentence;
}




$inputSentence = "Hello World! This is a test.";
$reversedSentence = reverseWordsInSentence($inputSentence);
echo "Original Sentence: $inputSentence\n";
echo "Reversed Words Sentence: $reversedSentence\n";
?>

