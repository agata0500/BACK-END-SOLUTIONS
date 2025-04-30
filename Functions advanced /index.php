<?php


$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

// "global" 
function countPercentage1($needle) {
    global $md5HashKey;
    $count = substr_count($md5HashKey, $needle);
    echo "Function 1: The needle '$needle' occurs $count " . ($count === 1 ? "time" : "times") . " in the hash key '$md5HashKey'\n";
}

//$GLOBALS array
function countPercentage2($needle) {
    $hash = $GLOBALS['md5HashKey'];
    $count = substr_count($hash, $needle);
    echo "Function 2: The needle '$needle' occurs $count " . ($count === 1 ? "time" : "times") . " in the hash key '$hash'\n";
}

//variable as a parameter
function countPercentage3($needle, $hash) {
    $count = substr_count($hash, $needle);
    echo "Function 3: The needle '$needle' occurs $count " . ($count === 1 ? "time" : "times") . " in the hash key '$hash'\n";
}

countPercentage1('2');                   // global keyword
countPercentage2('8');                   // $GLOBALS array
countPercentage3('a', $md5HashKey);      // pass as parameter

?>
