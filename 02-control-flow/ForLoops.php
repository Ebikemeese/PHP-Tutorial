<?php
/**
 * W3Schools PHP Tutorial: PHP For Loops & Nested Loops
 * 
 * The for loop is used when you know in advance how many times the script should run.
 * Syntax:
 * for (expression1; expression2; expression3) {
 *    // code to be executed
 * }
 */

// --- 1. Basic for Loop ---
echo "--- Counting 0 to 5 ---\n";
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x\n";
}

// --- 2. Counting by Tens to 100 ---
echo "\n--- Counting by 10 to 100 ---\n";
for ($i = 0; $i <= 100; $i += 10) {
    echo "$i ";
}
echo "\n";

// --- 3. Decrementing (Countdown) ---
echo "\n--- Countdown from 5 to 1 ---\n";
for ($down = 5; $down >= 1; $down--) {
    echo "T-minus: $down\n";
}
echo "Liftoff!\n";

// --- 4. Nested for Loops (Multiplication Table Grid) ---
echo "\n--- Multiplication Table (1 to 5) ---\n";
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        $product = $row * $col;
        // Format with padding for clean output
        printf("%4d", $product);
    }
    echo "\n";
}
