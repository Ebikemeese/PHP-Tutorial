<?php
/**
 * W3Schools PHP Tutorial: PHP Break and Continue Statements
 * 
 * - The break statement is used to jump out of a loop (for, foreach, while, do...while) or switch.
 * - The continue statement breaks one iteration in the loop, if a specified condition occurs,
 *   and continues with the next iteration in the loop.
 * - In PHP, break and continue accept an optional numeric argument telling how many nested
 *   enclosing structures are to be broken out of (e.g., break 2).
 */

// --- 1. Break in a for Loop ---
echo "--- Break at x == 4 ---\n";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break; // Stops loop completely
    }
    echo "The number is: $x\n";
}

// --- 2. Continue in a for Loop ---
echo "\n--- Continue (skips x == 4) ---\n";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue; // Skips current iteration
    }
    echo "The number is: $x\n";
}

// --- 3. Break and Continue in While Loop ---
echo "\n--- Continue in While Loop (skips 3) ---\n";
$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) {
        continue;
    }
    echo "While iteration: $i\n";
}

// --- 4. Multi-level Break (break 2) ---
echo "\n--- Multi-level break 2 in nested loops ---\n";
for ($outer = 1; $outer <= 3; $outer++) {
    echo "Outer loop: $outer\n";
    for ($inner = 1; $inner <= 3; $inner++) {
        if ($outer == 2 && $inner == 2) {
            echo "  Breaking out of BOTH inner and outer loops!\n";
            break 2; // Breaks both levels
        }
        echo "  Inner loop: $inner\n";
    }
}
