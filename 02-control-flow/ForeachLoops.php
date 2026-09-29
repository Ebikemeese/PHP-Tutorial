<?php
/**
 * W3Schools PHP Tutorial: PHP Foreach Loops
 * 
 * The foreach loop works only on arrays and objects, and is used to loop through
 * each key/value pair in an array or each property of an object.
 */

// --- 1. Foreach on Indexed Arrays ---
$colors = array("red", "green", "blue", "yellow");

echo "--- Indexed Array Foreach ---\n";
foreach ($colors as $color) {
    echo "Color: $color\n";
}

// --- 2. Foreach with Keys and Values (Associative Arrays) ---
$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "\n--- Key => Value Foreach ---\n";
foreach ($members as $name => $age) {
    echo "$name is $age years old.\n";
}

// --- 3. Foreach by Reference (&$value) ---
// By default, foreach copies array items.
// Using '&' before the value variable modifies original array elements directly!
$prices = array(10, 20, 30);
echo "\n--- Original prices ---\n";
print_r($prices);

foreach ($prices as &$price) {
    $price = $price * 1.10; // Apply 10% tax
}
unset($price); // Best practice: break reference with the last element

echo "Updated prices after 10% tax:\n";
print_r($prices);

// --- 4. Foreach over Object Properties ---
class UserProfile {
    public $username = "johndoe";
    public $email = "john@example.com";
    public $role = "Editor";
}

$user = new UserProfile();
echo "\n--- Foreach over Object Properties ---\n";
foreach ($user as $prop => $val) {
    echo "$prop: $val\n";
}
