<?php
/**
 * W3Schools PHP Tutorial: PHP Match Expression (PHP 8.0+)
 * 
 * The match expression evaluates an expression against multiple alternatives.
 * Major differences from switch:
 * 1. Match evaluates to a return value.
 * 2. Match branches do not fall through (no 'break' needed).
 * 3. Match uses STRICT type comparison (===) rather than loose comparison (==).
 * 4. Match must be exhaustive (default case recommended to avoid UnhandledMatchError).
 */

// --- 1. Basic Match Expression ---
$favColor = "red";

$message = match ($favColor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is something else!",
};
echo $message . "\n";

// --- 2. Multiple Conditions per Arm ---
$statusCode = 404;

$statusMessage = match ($statusCode) {
    200, 201 => "Request Succeeded",
    400, 401, 403, 404 => "Client Error",
    500, 502, 503 => "Server Error",
    default => "Unknown Status",
};
echo "HTTP $statusCode: $statusMessage\n";

// --- 3. Strict Comparison (===) in Match vs Loose (==) in Switch ---
$input = "1"; // string "1"

// In switch ("1" == 1) evaluates to TRUE (loose comparison)
$switchResult = "";
switch ($input) {
    case 1:
        $switchResult = "Matched integer 1 (loose)";
        break;
    case "1":
        $switchResult = "Matched string '1'";
        break;
}
echo "Switch result: $switchResult\n";

// In match ("1" === 1) evaluates to FALSE (strict comparison)
$matchResult = match ($input) {
    1 => "Matched integer 1",
    "1" => "Matched string '1' (strict)",
    default => "No match",
};
echo "Match result: $matchResult\n";

// --- 4. Matching Complex Expressions with true ---
$age = 25;
$lifeStage = match (true) {
    $age < 13 => "Child",
    $age < 20 => "Teenager",
    $age < 65 => "Adult",
    default => "Senior",
};
echo "Life Stage: $lifeStage\n";
