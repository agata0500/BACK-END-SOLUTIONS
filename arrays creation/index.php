<?php
// Part 1: Animals array in two ways
$animals1 = array("Dog", "Cat", "Elephant", "Tiger", "Lion", "Giraffe", "Zebra", "Monkey", "Rabbit", "Kangaroo");
$animals2 = ["Dog", "Cat", "Elephant", "Tiger", "Lion", "Giraffe", "Zebra", "Monkey", "Rabbit", "Kangaroo"];

// Part 2: Vehicles array (2D array)
$vehicles = [
    'landVehicles' => ["Vespa", "Bicycle"],
    'waterVehicles' => ["Surfboard", "Raft", "Schooner", "Three-master"],
    'airVehicles' => ["Hot air balloon", "Helicopter", "B52"]
];

// Output the 2D array using var_dump()
var_dump($vehicles);
?>
