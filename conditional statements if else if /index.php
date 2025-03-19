<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditional Statements</title>
</head>
<body>

<h1>Conditional statements: if else if</h1>

<h2>Part 1</h2>

<?php
$number = rand(1, 100);

$lowerBound = floor($number / 10) * 10;
$upperBound = $lowerBound + 10;

if ($number == 100) {
    $lowerBound = 90;
    $upperBound = 100;
}

$message = "The number $number lies between $lowerBound and $upperBound.";
$reversedMessage = strrev($message);

echo "<p>$message</p>";
echo "<p>$reversedMessage</p>";
?>

</body>
</html>