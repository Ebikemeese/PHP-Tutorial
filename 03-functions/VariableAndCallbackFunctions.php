<?php
/**
 * W3Schools PHP Tutorial: PHP Variable Functions & Callback Functions
 * 
 * - Variable Functions: If a variable name has parentheses appended to it, PHP will look
 *   for a function with the same name as whatever the variable evaluates to, and execute it.
 * - Callback Functions: A callback function is a function which is passed as an argument
 *   into another function.
 */

// --- 1. Variable Functions ---
function sayGoodMorning() {
    return "Good morning!";
}

function sayGoodEvening() {
    return "Good evening!";
}

$greetingFunc = "sayGoodMorning";
echo "Variable function call: " . $greetingFunc() . "\n";

$greetingFunc = "sayGoodEvening";
echo "Variable function call: " . $greetingFunc() . "\n";

// --- 2. Callbacks with Built-in Functions ---
// In PHP, callback functions can be passed as strings (function name) or closures
function calculateLength($item) {
    return strlen($item);
}

$fruits = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("calculateLength", $fruits);

echo "Fruit name lengths: ";
print_r($lengths);

// --- 3. User-defined Function Accepting a Callable Callback ---
function formatText(string $text, callable $formatter): string {
    return $formatter($text);
}

function exclaim(string $str): string {
    return $str . "! 🔥";
}

function question(string $str): string {
    return $str . "? 🤔";
}

echo formatText("Hello PHP", "exclaim") . "\n";
echo formatText("Is this working", "question") . "\n";

// --- 4. Using call_user_func ---
$result = call_user_func("strtoupper", "php callback tutorial");
echo "call_user_func strtoupper: " . $result . "\n";
