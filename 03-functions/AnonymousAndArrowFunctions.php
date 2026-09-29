<?php
/**
 * W3Schools PHP Tutorial: PHP Anonymous Functions (Closures) & Arrow Functions
 * 
 * - Anonymous functions (Closures) are functions without a specified name.
 *   They can be assigned to variables, passed into callbacks, and can capture variables
 *   from parent scope using the 'use' keyword.
 * - Arrow functions (fn() => ...) were introduced in PHP 7.4 as a cleaner syntax for
 *   one-line closures and automatically capture outer scope variables by value.
 */

// --- 1. Basic Anonymous Function ---
$sayHello = function($name) {
    return "Hello, $name!\n";
};

echo $sayHello("Alice");

// --- 2. Inheriting Variables from Parent Scope with 'use' ---
$taxRate = 0.15;

$calculateTotal = function($price) use ($taxRate) {
    return $price + ($price * $taxRate);
};

echo "Total with 15% tax on 100: " . $calculateTotal(100) . "\n";

// --- 3. Arrow Functions (PHP 7.4+) ---
// Syntax: fn(arguments) => expression;
// Automatically imports variables from the parent scope by-value without needing 'use'.
$multiplier = 3;

$triple = fn($number) => $number * $multiplier;

echo "Triple of 7 using arrow function: " . $triple(7) . "\n";

// --- 4. Using Closures and Arrow Functions in Array Operations ---
$numbers = [1, 2, 3, 4, 5];

// Using array_map with arrow function
$squares = array_map(fn($n) => $n * $n, $numbers);
echo "Squares: " . implode(", ", $squares) . "\n";

// Using array_filter with arrow function
$evens = array_filter($numbers, fn($n) => $n % 2 === 0);
echo "Even numbers: " . implode(", ", $evens) . "\n";
