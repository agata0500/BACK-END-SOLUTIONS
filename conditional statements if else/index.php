<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leap Year & Time Conversion</title>
</head>
<body>

<h1>Conditional statements: if else</h1>

<h2>Part 1: Leap Year Check</h2>

<?php
$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "<p>$year is a leap year.</p>";
} else {
    echo "<p>$year is not a leap year.</p>";
}
?>

<h2>Part 2: Time Conversion</h2>

<?php
$seconds = 221108521;

$minutes = floor($seconds / 60);
$hours = floor($minutes / 60);
$days = floor($hours / 24);
$weeks = floor($days / 7);
$months = floor($days / 31);
$years = floor($days / 365);

echo "<p>In $seconds seconds:</p>";
echo "<ul>";
echo "<li>Minutes: $minutes</li>";
echo "<li>Hours: $hours</li>";
echo "<li>Days: $days</li>";
echo "<li>Weeks: $weeks</li>";
echo "<li>Months (31-day months): $months</li>";
echo "<li>Years (365-day years): $years</li>";
echo "</ul>";
?>

</body>
</html>