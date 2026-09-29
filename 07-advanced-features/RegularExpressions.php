<?php
/**
 * W3Schools PHP Tutorial: PHP Regular Expressions (RegEx)
 * 
 * A regular expression is a sequence of characters that forms a search pattern.
 * PHP uses Perl-Compatible Regular Expressions (PCRE).
 * 
 * Main functions:
 * - preg_match(): Returns 1 if pattern found, 0 if not.
 * - preg_match_all(): Returns count of all matches found.
 * - preg_replace(): Replaces pattern matches with another string.
 */

$str = "Visit W3Schools for the best PHP tutorials! W3schools is awesome.";

// --- 1. preg_match() with /i modifier (Case-insensitive) ---
$pattern = "/w3schools/i";
$matchResult = preg_match($pattern, $str);
echo "preg_match found 'w3schools': " . ($matchResult ? "Yes" : "No") . "\n";

// --- 2. preg_match_all() ---
$allMatchesCount = preg_match_all($pattern, $str, $matches);
echo "preg_match_all found $allMatchesCount occurrences:\n";
print_r($matches[0]);

// --- 3. preg_replace() ---
$replaced = preg_replace("/w3schools/i", "TechPortal", $str);
echo "preg_replace result:\n$replaced\n\n";

// --- 4. Metacharacters and Quantifiers ---
// \d: digit, +: 1 or more, ^: start of string, $: end of string
$phone = "123-456-7890";
if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone)) {
    echo "Phone number format '$phone' is VALID.\n";
}

// Extracting all numbers from a string
$invoice = "Order #4829 has 5 items totaling $199.95.";
preg_match_all("/\d+(\.\d+)?/", $invoice, $extractedNumbers);
echo "Numbers extracted from invoice: " . implode(", ", $extractedNumbers[0]) . "\n";

// --- 5. Character Classes [abc] and [^abc] ---
$text = "apple bat cat dog egg";
preg_match_all("/[b-d]at/", $text, $rhymes);
echo "Words ending with 'at' starting with b, c, or d: " . implode(", ", $rhymes[0]) . "\n";
