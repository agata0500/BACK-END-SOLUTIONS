<?php

// calculate the sum
function calculateSum($number1, $number2) {
    return $number1 + $number2;
}

// calculate the product
function multiply($number1, $number2) {
    return $number1 * $number2;
}

//checking if a number is even
function isEven($number) {
    return $number % 2 === 0;
}

//returning the length and uppercase version of a string
function getStringInfo($string) {
    $length = strlen($string);
    $uppercase = strtoupper($string);
    return [$length, $uppercase];
}

// executing the functions
$sum = calculateSum(10, 5);
$product = multiply(10, 5);
$isEven = isEven(10);
$stringInfo = getStringInfo("hello world");

//results
echo "Sum: $sum\n";
echo "Product: $product\n";
echo "Is 10 even? " . ($isEven ? "Yes" : "No") . "\n";
echo "String length: " . $stringInfo[0] . "\n";
echo "Uppercase version: " . $stringInfo[1] . "\n";

?>
