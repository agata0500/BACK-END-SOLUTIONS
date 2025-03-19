<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch Statements</title>
</head>
<body>

<h1>Conditional statements: switch</h1>

<h2>Part 1: Day of the Week</h2>

<?php
$number = 5;

switch ($number) {
    case 1: $day = "monday"; break;
    case 2: $day = "tuesday"; break;
    case 3: $day = "wednesday"; break;
    case 4: $day = "thursday"; break;
    case 5: $day = "friday"; break;
    case 6: $day = "saturday"; break;
    case 7: $day = "sunday"; break;
    default: $day = "invalid"; 
}

echo "<p>Day: $day</p>";
?>

<h2>Part 2: Determine the Season</h2>

<?php
$month = "March";

$month = strtolower($month);

switch ($month) {
    case "december": case "january": case "february":
        $season = "Winter";
        break;
    case "march": case "april": case "may":
        $season = "Spring";
        break;
    case "june": case "july": case "august":
        $season = "Summer";
        break;
    case "september": case "october": case "november":
        $season = "Autumn";
        break;
    default:
        $season = "This is not a month that I recognize.";
}

echo "<p>Season: $season</p>";
?>

</body>
</html>