<?php
/**
 * W3Schools PHP Tutorial: PHP Named Arguments (PHP 8.0+)
 * 
 * PHP 8.0 introduced named arguments as an extension of existing positional parameters.
 * Benefits:
 * - Allows passing arguments to a function based on the parameter name, rather than position.
 * - Allows skipping default parameters cleanly.
 * - Makes function calls self-documenting.
 */

// --- 1. Basic Function with Multiple Parameters ---
function myFamily($firstname, $age, $city = "Oslo", $country = "Norway") {
    echo "$firstname is $age years old and lives in $city, $country.\n";
}

// Traditional Positional Call
myFamily("John", 30, "Bergen", "Norway");

// --- 2. Named Arguments Syntax ---
// Parameter order does not matter when using parameter names!
myFamily(age: 28, firstname: "Sarah", country: "Sweden", city: "Stockholm");

// --- 3. Skipping Optional Parameters using Named Arguments ---
// Notice how we skip $city and keep its default ("Oslo"), while overriding $country!
myFamily(firstname: "Liam", age: 15, country: "Denmark");

// --- 4. Combining Positional and Named Arguments ---
// Positional arguments must always come first, followed by named arguments
myFamily("Emma", 22, country: "Iceland");

// Built-in PHP functions with named arguments
$string = "Hello world! Beautiful day.";
$replaced = str_replace(search: "world", replace: "universe", subject: $string);
echo "str_replace with named arguments: $replaced\n";
