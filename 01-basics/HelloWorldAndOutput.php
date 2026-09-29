<?php
/**
 * W3Schools PHP Tutorial: PHP Intro, Syntax, and Output
 * 
 * PHP (Hypertext Preprocessor) is a widely-used, open-source server-side scripting language.
 * PHP scripts are executed on the server, and plain HTML is sent back to the browser.
 * A PHP script starts with <?php and ends with ?> (optional at the end of pure PHP files).
 */

// 1. Basic Echo output (echo can output one or more strings)
echo "Hello World!\n";
echo "I am learning PHP on W3Schools!\n";
echo "PHP is fun and powerful!\n";

// 2. Echo with multiple parameters (comma-separated, echo only)
echo "This ", "string ", "was ", "made ", "with multiple parameters.\n";

// 3. print statement (print returns 1, so it can be used in expressions)
print "Hello from print statement!\n";
$returnVal = print("Print returns a value.\n");
echo "print returned: " . $returnVal . "\n";

// 4. Printing Numbers and Mathematical calculations
echo 42 . "\n";
echo (3 + 3) . "\n";
echo (2 * 5) . "\n";
echo (20 / 4) . "\n";

// 5. Case Sensitivity in PHP:
// - Keywords (e.g., if, else, while, echo), classes, and functions are NOT case-sensitive.
// - Variable names ARE case-sensitive ($color != $COLOR != $coLOR).
ECHO "echo is not case-sensitive (ECHO)\n";
Echo "echo is not case-sensitive (Echo)\n";

$color = "red";
echo "My car is " . $color . "\n";
// $COLOR would trigger an undefined variable notice
