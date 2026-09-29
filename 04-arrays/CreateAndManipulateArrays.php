<?php
/**
 * W3Schools PHP Tutorial: Creating & Manipulating PHP Arrays
 * 
 * Topics:
 * - Adding items (using empty bracket syntax [] and array_push)
 * - Removing items (using unset, array_splice, array_pop, and array_shift)
 * - Difference between unset() and array_splice() reindexing
 */

// --- 1. Creating Arrays ---
$fruits = ["Apple", "Banana", "Orange"];

// --- 2. Adding Items to Arrays ---
// Using empty brackets appends to the end
$fruits[] = "Kiwi";
echo "After adding Kiwi with []:\n";
print_r($fruits);

// Using array_push() to add multiple items at once
array_push($fruits, "Mango", "Pineapple");
echo "After array_push():\n";
print_r($fruits);

// Adding to Associative Array
$person = ["name" => "Sarah", "age" => 25];
$person["email"] = "sarah@example.com";
$person += ["city" => "London", "job" => "Engineer"]; // Array addition
echo "Updated Associative Person:\n";
print_r($person);

// --- 3. Removing Items with unset() ---
// Note: unset() removes the element, but DOES NOT reindex numeric keys!
$colors = ["red", "green", "blue", "yellow"];
unset($colors[1]); // removes "green"
echo "After unset(\$colors[1]) (notice index 1 is missing):\n";
print_r($colors);

// Reindex with array_values()
$reindexed = array_values($colors);
echo "After re-indexing with array_values():\n";
print_r($reindexed);

// --- 4. Removing Items with array_splice() ---
// array_splice() removes items and AUTOMATICALLY reindexes numerical keys!
$cities = ["Paris", "Tokyo", "London", "New York"];
array_splice($cities, 1, 2); // Removes 2 elements starting at index 1 ("Tokyo", "London")
echo "After array_splice(1, 2) (keys are contiguous):\n";
print_r($cities);

// --- 5. Removing First and Last Items ---
$stack = ["first", "second", "third", "last"];

// array_pop() removes and returns the LAST element
$lastItem = array_pop($stack);
echo "Popped last item: $lastItem\n";

// array_shift() removes and returns the FIRST element
$firstItem = array_shift($stack);
echo "Shifted first item: $firstItem\n";

echo "Remaining stack:\n";
print_r($stack);
