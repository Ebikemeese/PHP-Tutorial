<?php
/**
 * W3Schools PHP Tutorial: PHP Throwing & Re-throwing Exceptions
 * 
 * - The throw statement allows a user-defined function or method to throw an exception.
 * - When an exception is thrown, the code following it will not be executed.
 * - Re-throwing: If an exception cannot be fully handled, it can be caught, logged,
 *   and re-thrown up the call stack.
 */

// --- 1. Throwing an Exception on Validation Failure ---
function checkAge(int $age): void {
    if ($age < 18) {
        throw new Exception("Access Denied: You must be at least 18 years old. Provided: $age");
    }
    echo "Access Granted for age: $age.\n";
}

try {
    checkAge(21);
    checkAge(15);
} catch (Exception $e) {
    echo "Validation Notice: " . $e->getMessage() . "\n\n";
}

// --- 2. Re-throwing an Exception ---
function processPayment(float $amount): void {
    try {
        if ($amount <= 0) {
            throw new Exception("Invalid payment amount: $$amount");
        }
        echo "Payment of $$amount authorized.\n";
    } catch (Exception $e) {
        echo "[Audit Log] Payment failure recorded: " . $e->getMessage() . "\n";
        // Re-throw exception for outer caller to handle
        throw $e;
    }
}

try {
    processPayment(-50.0);
} catch (Exception $e) {
    echo "[Outer Catch] Handled re-thrown exception: " . $e->getMessage() . "\n";
}
