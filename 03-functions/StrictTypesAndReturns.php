<?php
declare(strict_types=1);
/**
 * W3Schools PHP Tutorial: PHP Strict Types, Type Declarations & Return Types
 * 
 * PHP is a loosely typed language by default.
 * With `declare(strict_types=1);` on the very first line of the file, PHP enforces
 * strict type matching for function arguments and return types.
 */

// --- 1. Argument Type Declarations ---
function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo "addNumbers(5, 5): " . addNumbers(5, 5) . "\n";
// addNumbers(5, "5 days"); // Throws TypeError in strict mode!

// --- 2. Float Return Type ---
function addFloats(float $a, float $b): float {
    return $a + $b;
}

echo "addFloats(1.2, 5.2): " . addFloats(1.2, 5.2) . "\n";

// --- 3. Return Type Casting / Strict Return ---
function divide(int $a, int $b): float {
    return $a / $b;
}

echo "divide(7, 2): " . divide(7, 2) . "\n";

// --- 4. Nullable Types (?type) ---
// Prefixing the type with a question mark allows null to be accepted or returned
function greetUser(?string $name): string {
    if ($name === null) {
        return "Hello, anonymous guest!";
    }
    return "Hello, $name!";
}

echo greetUser("Alice") . "\n";
echo greetUser(null) . "\n";

// --- 5. Void Return Type ---
// Indicates that the function does not return a value
function logMessage(string $msg): void {
    echo "[LOG " . date("H:i:s") . "] " . $msg . "\n";
    // return; // valid with no expression
}

logMessage("System initialization complete.");
