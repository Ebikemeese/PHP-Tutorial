<?php
/**
 * W3Schools PHP Tutorial: PHP Indexed Arrays
 * 
 * An indexed array stores each array element with a numeric index starting from 0.
 * Can be created using array() or the shorthand [] syntax.
 */

// --- 1. Creating Indexed Arrays ---
$cars = array("Volvo", "BMW", "Toyota");
$fruits = ["Apple", "Banana", "Cherry"]; // Shorthand syntax

// --- 2. Accessing Items by Index ---
echo "First car: " . $cars[0] . "\n";
echo "Second car: " . $cars[1] . "\n";
echo "Third car: " . $cars[2] . "\n";

// --- 3. Modifying Items by Index ---
$cars[1] = "Ford";
echo "Updated second car: " . $cars[1] . "\n";

// --- 4. Array Length with count() ---
$numCars = count($cars);
echo "Number of cars in array: " . $numCars . "\n";

// --- 5. Loop through an Indexed Array with for Loop ---
echo "\n--- For Loop Traversal ---\n";
for ($i = 0; $i < $numCars; $i++) {
    echo "Car at index $i: " . $cars[$i] . "\n";
}

// --- 6. Loop through an Indexed Array with foreach Loop ---
echo "\n--- Foreach Loop Traversal ---\n";
foreach ($fruits as $index => $fruit) {
    echo "Index $index has fruit: $fruit\n";
}
