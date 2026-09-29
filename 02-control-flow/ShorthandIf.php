<?php
/**
 * W3Schools PHP Tutorial: PHP Shorthand If Statements & Ternary Operator
 * 
 * To write shorter code, you can use short-hand if syntax:
 * - One-line if
 * - Ternary operator (condition ? expr1 : expr2)
 * - Short Ternary / Elvis operator (expr1 ?: expr2)
 * - Null coalescing operator (expr1 ?? expr2)
 */

// --- 1. One-line if statement (no curly brackets) ---
$a = 5;
if ($a < 10) $b = "Hello";
echo "One-line if result: $b\n";

// --- 2. Short Hand If...Else (Ternary Operator) ---
// Syntax: $variable = $condition ? $value_if_true : $value_if_false;
$age = 19;
$access = ($age >= 18) ? "Granted" : "Denied";
echo "Access: $access\n";

// Direct echo using ternary
$isLoggedIn = true;
echo ($isLoggedIn ? "Welcome back!" : "Please log in.") . "\n";

// --- 3. Short Ternary (Elvis Operator ?:) ---
// Returns the left-hand operand if it evaluates to true, otherwise the right-hand operand
$customTheme = "";
$activeTheme = $customTheme ?: "default-theme";
echo "Active Theme: $activeTheme\n";

// --- 4. Null Coalescing Operator (??) ---
// Returns its first operand if it exists and is not null; otherwise returns second operand
$dbConfigPort = null;
$port = $dbConfigPort ?? 3306;
echo "Database Port: $port\n";

// Chaining null coalescing
$userRole = null;
$fallbackRole = null;
$defaultRole = "viewer";
$finalRole = $userRole ?? $fallbackRole ?? $defaultRole;
echo "Assigned Role: $finalRole\n";
