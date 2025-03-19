<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body>
        
        <h1>String functions</h1>

        <h2>Part 1</h2>

        <?php
        $fruit = "coconut";
        $fruitLength = strlen($fruit); 
        $positionOfO = strpos($fruit, "o");
        ?>

        <p>Fruit: <?= $fruit ?></p>
        <p> Length of Fruit: <?= $fruitLength ?></p>
        <p>Position of the first 'o': <?= $positionOfO ?></p>
        

        <h2>Part 2</h2>

        <?php
        $fruit2 = "pineapple"; 
        $lastPosition = strrpos($fruit2, $fruit2Needle); 
        $uppercaseFruit = strtoupper($fruit2); 
        ?>

        <p> The position of the last '<?= $fruit2Needle ?>' is: <?= $lastPosition ?></p>
        <p> Uppercase Fruit: <?= $uppercaseFruit ?></p>


        <h2>Part 3</h2>

        <?php
        $letter = "e"; 
        $number = "3";
        $longestWord = "pneumonoultramicroscopicsilicovolcanoconiosis";

        $changedWord = str_replace($letter, $number, $longestWord); 
        ?>

        <p>Changed word: <?= $changedWord ?></p>

    </body>
</html>
