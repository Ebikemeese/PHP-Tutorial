<?php
/**
 * W3Schools PHP Tutorial: PHP If...Else...Elseif & Nested If
 * 
 * Conditional statements are used to perform different actions based on different conditions.
 * - if statement
 * - if...else statement
 * - if...elseif...else statement
 * - nested if statements
 */

$t = 14; // current hour (24-hour format)

// --- 1. The if Statement ---
if ($t < 20) {
    echo "Have a good day!\n";
}

// --- 2. The if...else Statement ---
$temperature = 12;
if ($temperature > 20) {
    echo "It's warm outside.\n";
} else {
    echo "It's chilly outside.\n";
}

// --- 3. The if...elseif...else Statement ---
if ($t < 10) {
    echo "Good morning!\n";
} elseif ($t < 18) {
    echo "Good day!\n";
} else {
    echo "Good evening!\n";
}

// --- 4. Comparing with Logical Operators ---
$score = 85;
$attendance = 92;

if ($score >= 80 && $attendance >= 90) {
    echo "Passed with Honors!\n";
} elseif ($score >= 50 || $attendance >= 80) {
    echo "Passed Regular.\n";
} else {
    echo "Needs Improvement.\n";
}

// --- 5. Nested if Statements ---
$age = 22;
$hasLicense = true;

if ($age >= 18) {
    echo "Age check passed.\n";
    if ($hasLicense) {
        echo "Authorized to drive vehicle.\n";
    } else {
        echo "Adult, but no driving license.\n";
    }
} else {
    echo "Underage for driving.\n";
}
