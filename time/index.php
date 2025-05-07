<?php
// Original date string
$dateString = '10:35:25 pm 21 January 1904';

// Convert to timestamp
$timestamp = strtotime($dateString);

// Extract standard components
$day = date('d', $timestamp);
$month = date('F', $timestamp); // Full month name
$year = date('Y', $timestamp);
$time = date('h:i:s a', $timestamp);

// 🌿 Nature-inspired month names
$monthMap = [
    'January' => 'Willowshade',
    'February' => 'Lavendermoon',
    'March' => 'Thistlewind',
    'April' => 'Blossomfall',
    'May' => 'Cloverlight',
    'June' => 'Honeysung',
    'July' => 'Oakflame',
    'August' => 'Sagebloom',
    'September' => 'Fernwhisper',
    'October' => 'Mapleglow',
    'November' => 'Mossveil',
    'December' => 'Pinehollow'
];

// Use the mapped month name or fallback
$creativeMonth = $monthMap[$month] ?? $month;

// Final formatted strings
$formattedDate = "$day $month $year, $time";
$creativeDate = "$day $creativeMonth $year, $time";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nature Time</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: 5f5;
            color: #2f4f4f;
            padding: 40px;
            max-width: 700px;
            margin: auto;
            line-height: 1.6;
        }

        h1 {
            color: #4b7c59;
            text-align: center;
        }

        p {
            font-size: 1.2em;
        }

        .highlight {
            background-color: #e6f2ea;
            padding: 10px;
            border-left: 5px solid #4b7c59;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Nature-Inspired Time Format</h1>

<p><strong>Original date:</strong> <?= htmlspecialchars($dateString) ?></p>
<p><strong>Timestamp:</strong> <?= $timestamp ?></p>

<div class="highlight">
    <p><strong>Standard format:</strong><br><?= $formattedDate ?></p>
    <p><strong>Creative format:</strong><br><?= $creativeDate ?></p>
</div>

</body>
</html>
