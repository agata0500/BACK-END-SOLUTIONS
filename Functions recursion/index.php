<?php

function calculateInterest($amount, $year = 1, $maxYears = 10) {
    // calculating new amount with 8% interest and round down
    $newAmount = floor($amount * 1.08);
    
    // current year
    echo "Year $year: €$newAmount\n";

    // If we've reached the max number of years, stop
    if ($year >= $maxYears) {
        return $newAmount;
    }

    // next year
    return calculateInterest($newAmount, $year + 1, $maxYears);
}

$finalAmount = calculateInterest(100000);

// showing total after 10 years
echo "After 10 years, Hans will have €$finalAmount\n";
