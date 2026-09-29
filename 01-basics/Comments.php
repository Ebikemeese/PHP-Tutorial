<?php
/**
 * W3Schools PHP Tutorial: PHP Comments
 * 
 * Comments in PHP code can be used to:
 * - Let others understand your code
 * - Remind yourself of what you did
 * - Leave out parts of your code during testing
 */

// 1. Single-line comment using double slashes (//)
// This is a single-line comment

# 2. Single-line comment using hash symbol (#)
# This is also a single-line comment (Unix shell-style)

/*
 * 3. Multi-line comment
 * This syntax can span across
 * multiple lines of code.
 */

// 4. Using comments to leave out parts of the code
$x = 5 /* + 15 */ + 5;
echo "Result of calculation with inline comment: " . $x . "\n";

/**
 * 5. PHPDoc / DocBlock comments
 * Commonly used above functions, classes, and methods for documentation.
 *
 * @param string $name The visitor's name
 * @return string Greeting message
 */
function greetVisitor($name) {
    return "Welcome, " . $name . "!";
}

echo greetVisitor("Developer") . "\n";
