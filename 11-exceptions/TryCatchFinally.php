<?php
/**
 * W3Schools PHP Tutorial: PHP Exceptions - Try, Catch, and Finally
 * 
 * An exception is an object that describes an error or unexpected behaviour of a PHP script.
 * - The try...catch statement is used to catch exceptions and continue the process of the code.
 * - The finally block can be used to run code regardless of whether an exception was caught or not.
 * 
 * Exception Methods:
 * - getMessage(): Returns a string describing why exception was thrown
 * - getCode(): Returns the numeric exception code
 * - getFile(): Returns the full path of the file in which exception occurred
 * - getLine(): Returns the line number on which exception occurred
 */

function safeDivide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero error", 400);
    }
    return $dividend / $divisor;
}

echo "--- 1. Catching Exception ---\n";
try {
    echo "10 / 2 = " . safeDivide(10, 2) . "\n";
    echo "10 / 0 = " . safeDivide(10, 0) . "\n";
    echo "This line will not execute!\n";
} catch (Exception $e) {
    echo "Caught Exception!\n";
    echo "Message: " . $e->getMessage() . "\n";
    echo "Code:    " . $e->getCode() . "\n";
    echo "File:    " . $e->getFile() . "\n";
    echo "Line:    " . $e->getLine() . "\n";
} finally {
    echo "Finally block always runs: cleanup completed.\n";
}

echo "\nScript continues execution normally after catch block.\n";
