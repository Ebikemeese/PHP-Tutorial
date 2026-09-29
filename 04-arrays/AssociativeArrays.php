<?php
/**
 * W3Schools PHP Tutorial: PHP Associative Arrays
 * 
 * Associative arrays are arrays that use named keys that you assign to them.
 * Keys can be strings or integers, mapped to corresponding values using '=>'.
 */

// --- 1. Creating Associative Arrays ---
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

// Alternative shorthand syntax
$car = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year"  => 1964
];

// --- 2. Accessing Items by Key ---
echo "Peter is " . $age['Peter'] . " years old.\n";
echo "Car model is: " . $car['model'] . "\n";

// --- 3. Modifying Items by Key ---
$age['Peter'] = 36;
$car['year'] = 2024;
echo "Updated Peter's age: " . $age['Peter'] . "\n";
echo "Updated Car year: " . $car['year'] . "\n";

// --- 4. Adding New Key-Value Pairs ---
$car['color'] = "Midnight Blue";
echo "Added color: " . $car['color'] . "\n";

// --- 5. Loop Through an Associative Array ---
echo "\n--- Member Ages ---\n";
foreach ($age as $person => $years) {
    echo "Key=" . $person . ", Value=" . $years . "\n";
}

echo "\n--- Car Details ---\n";
foreach ($car as $spec => $val) {
    echo "$spec: $val\n";
}
