<?php
    // Define first name and last name
    $firstName = "Agata";
    $lastName = "Zareba"; 
    $

    // Concatenate first and last name
    $fullName = $firstName . " " . $lastName;

    // Get the character count of $fullName
    $nameLength = strlen($fullName);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body>
        <h1>Exercise string concatenation</h1>

        <ul>
            <li>Create two separate variables that contain your first name and last name</li>
            <li>Concatenate both variables and assign the concatenated value to a new variable called <code>$fullName</code></li>
            <li>Print the variable value in a valid HTML document</li>
            <li>Extra: print the character count of <code>$fullName</code> in a new paragraph</li>
        </ul>

        <p>Full Name: <?php echo htmlspecialchars($fullName); ?></p>
        <p>Character Count: <?php echo $nameLength; ?></p>
    </body>
</html>
