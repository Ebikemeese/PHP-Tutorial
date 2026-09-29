<?php
/**
 * W3Schools PHP Tutorial: PHP Variables & Variable Scope
 * 
 * In PHP, a variable starts with the $ sign, followed by the name of the variable.
 * Variables can have short names (like $x and $y) or descriptive names ($age, $carName).
 * Scope determines where variables can be accessed: local, global, static.
 */

// --- 1. Declaring Variables ---
$txt = "W3Schools.com";
$x = 5;
$y = 10.5;

echo "I love $txt!\n";
echo "Sum of x and y: " . ($x + $y) . "\n";

// --- 2. Global Scope ---
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
$globalVar = 25;

function testLocalScope() {
    // Local scope: variable declared within a function has a LOCAL SCOPE
    $localVar = 100;
    echo "Inside testLocalScope - localVar: $localVar\n";
    // echo $globalVar; // Would cause a warning/notice: Undefined variable
}
testLocalScope();

// --- 3. The 'global' Keyword ---
// Used to access a global variable from within a function
$a = 15;
$b = 30;

function sumGlobalVars() {
    global $a, $b;
    $b = $a + $b;
}
sumGlobalVars();
echo "Updated global \$b: $b\n"; // Outputs 45

// --- 4. The $GLOBALS Array ---
// PHP stores all global variables in an array called $GLOBALS[index].
// The index holds the name of the variable.
$num1 = 50;
$num2 = 75;

function multiplyGlobals() {
    $GLOBALS['numProduct'] = $GLOBALS['num1'] * $GLOBALS['num2'];
}
multiplyGlobals();
echo "Product via \$GLOBALS array: $numProduct\n";

// --- 5. The 'static' Keyword ---
// Normally, when a function completes, all of its local variables are deleted.
// A static variable keeps its value across repeated function calls.
function counter() {
    static $count = 0;
    $count++;
    echo "Counter is now: $count\n";
}

counter(); // Outputs 1
counter(); // Outputs 2
counter(); // Outputs 3
