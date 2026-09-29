<?php
/**
 * W3Schools PHP Tutorial: PHP Function Arguments & Parameters
 * 
 * Information can be passed to functions through arguments. An argument is just like a variable.
 * Topics:
 * - Single and multiple arguments
 * - Default parameter values
 * - Passing arguments by reference (&)
 * - Variable-length argument list (Variadic functions / ...$args)
 */

// --- 1. Single and Multiple Arguments ---
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year.\n";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

// --- 2. Default Argument Value ---
function setHeight($minHeight = 50) {
    echo "The height is: $minHeight\n";
}

setHeight(350);
setHeight(); // Will use default value of 50
setHeight(135);

// --- 3. Passing Arguments By Reference (&$param) ---
// Changes made to the parameter inside the function affect the original variable
function addFive(&$value) {
    $value += 5;
}

$num = 2;
echo "Original num before addFive: $num\n";
addFive($num);
echo "Num after addFive (by-reference): $num\n"; // Outputs 7

// --- 4. Variable Number of Arguments (Variadic / Splat Operator ...) ---
function sumMyNumbers(...$numbers) {
    $total = 0;
    $len = count($numbers);
    for ($i = 0; $i < $len; $i++) {
        $total += $numbers[$i];
    }
    return $total;
}

echo "Sum of (5, 2, 6, 8): " . sumMyNumbers(5, 2, 6, 8) . "\n";
echo "Sum of (10, 20): " . sumMyNumbers(10, 20) . "\n";

// Variadic with regular argument first
function myFamily($lastname, ...$firstnames) {
    $result = "";
    foreach ($firstnames as $first) {
        $result .= "$first $lastname, ";
    }
    return rtrim($result, ", ");
}

echo myFamily("Doe", "Jane", "John", "Joey") . "\n";
