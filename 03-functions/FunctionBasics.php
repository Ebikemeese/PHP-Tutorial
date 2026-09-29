<?php
/**
 * W3Schools PHP Tutorial: PHP Functions Basics
 * 
 * A function is a block of statements that can be used repeatedly in a program.
 * A function will not execute automatically when a page loads; it is executed by a call.
 * Function names are NOT case-sensitive in PHP.
 */

// --- 1. Creating and Calling a Function ---
function writeMsg() {
    echo "Hello world from writeMsg()!\n";
}

writeMsg(); // Call the function

// --- 2. Case Insensitivity of Function Names ---
// writeMsg, WRITEMSG, and WriteMsg refer to the same function
WriteMsg();
WRITEMSG();

// --- 3. Functions with Return Values ---
function getWelcomeMessage() {
    return "Welcome to PHP Learning Journey!";
}

$greeting = getWelcomeMessage();
echo $greeting . "\n";

// --- 4. Reusability ---
function calculateDiscount($price, $percentage) {
    return $price - ($price * ($percentage / 100));
}

echo "Final price after 20% discount on 150: " . calculateDiscount(150, 20) . "\n";
echo "Final price after 10% discount on 80: " . calculateDiscount(80, 10) . "\n";
