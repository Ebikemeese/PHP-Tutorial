<?php
/**
 * W3Schools PHP Tutorial: PHP Array Functions
 * 
 * PHP has a rich set of built-in functions to manipulate and query arrays.
 */

$fruits1 = ["apple", "banana"];
$fruits2 = ["cherry", "date", "apple"];

// --- 1. array_merge() ---
// Merges one or more arrays into one
$allFruits = array_merge($fruits1, $fruits2);
echo "array_merge:\n";
print_r($allFruits);

// --- 2. array_unique() ---
// Removes duplicate values from an array
$uniqueFruits = array_unique($allFruits);
echo "array_unique:\n";
print_r($uniqueFruits);

// --- 3. array_keys() and array_values() ---
$user = ["id" => 101, "username" => "john_dev", "role" => "admin"];
echo "Keys: " . implode(", ", array_keys($user)) . "\n";
echo "Values: " . implode(", ", array_values($user)) . "\n";

// --- 4. in_array() and array_key_exists() ---
echo "Has key 'role'? " . (array_key_exists("role", $user) ? "Yes" : "No") . "\n";
echo "Contains value 'admin'? " . (in_array("admin", $user) ? "Yes" : "No") . "\n";

// --- 5. array_search() ---
// Searches array for a given value and returns the corresponding key if successful
$key = array_search("john_dev", $user);
echo "Found 'john_dev' at key: $key\n";

// --- 6. array_filter() ---
// Filters elements of an array using a callback function
$scores = [45, 88, 72, 30, 95, 60];
$passing = array_filter($scores, fn($s) => $s >= 60);
echo "Passing scores (>= 60): " . implode(", ", $passing) . "\n";

// --- 7. array_map() ---
// Applies callback to each element of the given arrays
$doubled = array_map(fn($s) => $s * 2, [1, 2, 3, 4]);
echo "Doubled: " . implode(", ", $doubled) . "\n";

// --- 8. array_reduce() ---
// Iteratively reduces array to a single value using a callback
$sum = array_reduce([10, 20, 30], fn($carry, $item) => $carry + $item, 0);
echo "Sum via array_reduce: $sum\n";

// --- 9. array_chunk() & array_reverse() ---
$deck = ["A", "B", "C", "D", "E", "F"];
$chunks = array_chunk($deck, 2);
echo "Chunked in pairs of 2:\n";
print_r($chunks);

$reversed = array_reverse($deck);
echo "Reversed: " . implode(", ", $reversed) . "\n";
