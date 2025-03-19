<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Days of the Week</title>
</head>
<body>

<h1>Conditional statements: if</h1>

<h2>Part 1: Display Day Name</h2>

<?php
$number = 3;

$days = [
    1 => "monday",
    2 => "tuesday",
    3 => "wednesday",
    4 => "thursday",
    5 => "friday",
    6 => "saturday",
    7 => "sunday"
];

if (isset($days[$number])) {
    echo "<p>Day: " . $days[$number] . "</p>";
} else {
    echo "<p>Invalid number. Pick between 1-7.</p>";
}
?>

<h2>Part 2: Modify Day Name</h2>

<?php
if (isset($days[$number])) {
    $uppercaseDay = strtoupper($days[$number]);
    $uppercaseExceptA = str_replace("A", "a", $uppercaseDay);
    $uppercaseExceptLastA = substr_replace($uppercaseDay, "a", strrpos($uppercaseDay, "A"), 1);

    echo "<p>Uppercase: $uppercaseDay</p>";
    echo "<p>Uppercase (except 'A'): $uppercaseExceptA</p>";
    echo "<p>Uppercase (except last 'A'): $uppercaseExceptLastA</p>";
}
?>

</body>
</html>