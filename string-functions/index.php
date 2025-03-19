<?php
$fruit = "coconut";


$length = strlen($fruit);
echo "The number of characters in '$fruit' is: $length\n";

$firstOPosition = strpos($fruit, 'o');
echo "The position of the first 'o' in '$fruit' is: $firstOPosition\n";


$fruit = "pineapple";


$lastAPosition = strrpos($fruit, 'a');
echo "The position of the last 'a' in '$fruit' is: $lastAPosition\n";


$fruitUpper = strtoupper($fruit);
echo "The uppercase version of '$fruit' is: $fruitUpper\n";


$letter = "e";
$number = "3";
$longestWord = "pneumonoultramicroscopicsilicovolcanoconiosis";


$modifiedWord = str_replace($letter, $number, $longestWord);
echo "Modified word: $modifiedWord\n";
?>
