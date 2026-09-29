<?php
/**
 * W3Schools PHP Tutorial: PHP Operators
 * 
 * PHP divides the operators into the following groups:
 * - Arithmetic operators
 * - Assignment operators
 * - Comparison operators
 * - Increment/Decrement operators
 * - Logical operators
 * - String operators
 * - Array operators
 * - Conditional assignment operators
 */

// --- 1. Arithmetic Operators ---
$x = 10;
$y = 3;
echo "Addition (x + y): " . ($x + $y) . "\n";
echo "Subtraction (x - y): " . ($x - $y) . "\n";
echo "Multiplication (x * y): " . ($x * $y) . "\n";
echo "Division (x / y): " . ($x / $y) . "\n";
echo "Modulus (x % y): " . ($x % $y) . "\n";
echo "Exponentiation (x ** y): " . ($x ** $y) . "\n"; // 10^3 = 1000

// --- 2. Comparison Operators & Spaceship (<=>) ---
$a = 100;
$b = "100";
echo "Equal (==): " . ($a == $b ? "True" : "False") . "\n";           // True (type coercion)
echo "Identical (===): " . ($a === $b ? "True" : "False") . "\n";     // False (different types)
echo "Not identical (!==): " . ($a !== $b ? "True" : "False") . "\n"; // True

// Spaceship operator (<=>): returns -1 if left < right, 0 if equal, 1 if left > right
echo "Spaceship 5 <=> 10: " . (5 <=> 10) . "\n";  // -1
echo "Spaceship 10 <=> 10: " . (10 <=> 10) . "\n"; // 0
echo "Spaceship 15 <=> 10: " . (15 <=> 10) . "\n"; // 1

// --- 3. Increment / Decrement Operators ---
$num = 5;
echo "Pre-increment (++num): " . (++$num) . "\n"; // 6
echo "Post-increment (num++): " . ($num++) . "\n"; // 6 (then becomes 7)
echo "Current value: " . $num . "\n";              // 7
echo "Pre-decrement (--num): " . (--$num) . "\n"; // 6
echo "Post-decrement (num--): " . ($num--) . "\n"; // 6 (then becomes 5)

// --- 4. Logical Operators ---
// and, or, xor, &&, ||, !
$p = true;
$q = false;
echo "p && q: " . ($p && $q ? "True" : "False") . "\n";
echo "p || q: " . ($p || $q ? "True" : "False") . "\n";
echo "p xor q: " . ($p xor $q ? "True" : "False") . "\n"; // True if one is true, but NOT both
echo "!p: " . (!$p ? "True" : "False") . "\n";

// --- 5. Array Operators ---
$arr1 = array("a" => "apple", "b" => "banana");
$arr2 = array("c" => "cherry", "d" => "date");
$union = $arr1 + $arr2; // Union of $arr1 and $arr2
echo "Array Union: ";
print_r($union);

// --- 6. Conditional Assignment Operators ---
// Ternary: (condition) ? trueVal : falseVal
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Ternary Status: " . $status . "\n";

// Null Coalescing Operator (??): returns left operand if set and not null, else right operand
$userInput = null;
$username = $userInput ?? "Guest";
echo "Null Coalescing Username: " . $username . "\n";

$providedInput = "JohnDoe";
echo "When input exists: " . ($providedInput ?? "Guest") . "\n";
