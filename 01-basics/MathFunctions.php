<?php
/**
 * W3Schools PHP Tutorial: PHP Math Functions
 * 
 * PHP has a set of built-in math functions that allows you to perform
 * mathematical tasks on numbers.
 */

// --- 1. PHP pi() Function ---
echo "pi(): " . pi() . "\n";

// --- 2. PHP min() and max() Functions ---
// Can find the lowest or highest value in a list of arguments or array
echo "min(0, 150, 30, 20, -8, -200): " . min(0, 150, 30, 20, -8, -200) . "\n";
echo "max(0, 150, 30, 20, -8, -200): " . max(0, 150, 30, 20, -8, -200) . "\n";

// --- 3. PHP abs() Function ---
// Returns the absolute (positive) value of a number
echo "abs(-6.7): " . abs(-6.7) . "\n";

// --- 4. PHP sqrt() Function ---
// Returns the square root of a number
echo "sqrt(64): " . sqrt(64) . "\n";
echo "sqrt(144): " . sqrt(144) . "\n";

// --- 5. PHP round(), ceil(), and floor() ---
// round() rounds a floating-point number to its nearest integer
echo "round(0.60): " . round(0.60) . "\n"; // 1
echo "round(0.49): " . round(0.49) . "\n"; // 0
echo "round(1.95583, 2): " . round(1.95583, 2) . "\n"; // 1.96

// ceil() rounds UP to the next integer
echo "ceil(4.2): " . ceil(4.2) . "\n"; // 5

// floor() rounds DOWN to the previous integer
echo "floor(4.8): " . floor(4.8) . "\n"; // 4

// --- 6. PHP Random Numbers: rand() ---
// rand() generates a random integer
echo "Random number: " . rand() . "\n";

// rand(min, max) generates a random integer between min and max inclusive
echo "Random number (10 to 100): " . rand(10, 100) . "\n";
echo "Dice roll (1 to 6): " . rand(1, 6) . "\n";
