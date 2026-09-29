<?php
/**
 * W3Schools PHP Tutorial: PHP While and Do-While Loops
 * 
 * - The while loop executes a block of code as long as the specified condition is true.
 * - The do...while loop will always execute the block of code once, then check the condition,
 *   and repeat the loop while the specified condition is true.
 */

// --- 1. Basic while Loop ---
echo "--- Basic while Loop (1 to 5) ---\n";
$i = 1;
while ($i <= 5) {
    echo "Number: $i\n";
    $i++;
}

// --- 2. while Loop with Step Counter ---
echo "\n--- Step Counting by 10 (0 to 50) ---\n";
$step = 0;
while ($step <= 50) {
    echo "Step: $step\n";
    $step += 10;
}

// --- 3. while Loop with break ---
echo "\n--- while Loop with break at 3 ---\n";
$count = 1;
while ($count <= 10) {
    if ($count == 3) {
        echo "Breaking at count: $count\n";
        break;
    }
    echo "Count: $count\n";
    $count++;
}

// --- 4. The do...while Loop ---
echo "\n--- The do...while Loop (1 to 5) ---\n";
$d = 1;
do {
    echo "Value of d: $d\n";
    $d++;
} while ($d <= 5);

// --- 5. do...while Guarantees at least ONE Execution ---
echo "\n--- do...while with Initially False Condition ---\n";
$falseCondVar = 8;
do {
    echo "This executes even though \$falseCondVar ($falseCondVar) > 5!\n";
    $falseCondVar++;
} while ($falseCondVar < 5);
