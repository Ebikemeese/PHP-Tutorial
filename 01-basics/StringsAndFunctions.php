<?php
/**
 * W3Schools PHP Tutorial: PHP Strings, String Functions, Slicing & Escaping
 * 
 * Strings in PHP can be written inside double quotes or single quotes.
 * Double quotes perform variable parsing and interpret escape characters.
 * Single quotes treat string values literally.
 */

// --- 1. Double Quotes vs Single Quotes ---
$name = "Alice";
echo "Hello, $name!\n";    // Variable interpolation works: Hello, Alice!
echo 'Hello, $name!\n';    // Treated literally: Hello, $name!\n
echo "\n";

// --- 2. String Length & Word Count ---
$sampleText = "The quick brown fox jumps over the lazy dog";
echo "Length (strlen): " . strlen($sampleText) . " characters\n";
echo "Word count (str_word_count): " . str_word_count($sampleText) . " words\n";

// --- 3. Searching in Strings ---
// strpos() searches for a specific text within a string and returns position or false
$searchWord = "brown";
$pos = strpos($sampleText, $searchWord);
echo "Position of '$searchWord' (strpos): " . $pos . "\n";

// --- 4. Modifying Strings ---
$greeting = "  Hello World!  ";
echo "Uppercase (strtoupper): " . strtoupper($greeting) . "\n";
echo "Lowercase (strtolower): " . strtolower($greeting) . "\n";
echo "Replaced (str_replace): " . str_replace("World", "PHP", $greeting) . "\n";
echo "Reversed (strrev): " . strrev("PHP Tutorial") . "\n";
echo "Trimmed (trim): '" . trim($greeting) . "'\n";

// Convert String into Array using explode()
$csv = "apple,banana,cherry,dates";
$fruitArray = explode(",", $csv);
echo "Exploded array: ";
print_r($fruitArray);

// --- 5. Concatenation ---
$str1 = "Web";
$str2 = "Development";
$full = $str1 . " " . $str2; // using . operator
echo "Concatenated: " . $full . "\n";

$prefix = "PHP ";
$prefix .= "Tutorials"; // using .= assignment operator
echo "Appended: " . $prefix . "\n";

// --- 6. Slicing Strings (substr) ---
$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
echo "Slice from index 6: " . substr($alphabet, 6) . "\n";
echo "Slice 5 chars from index 6: " . substr($alphabet, 6, 5) . "\n";
echo "Slice from end (-5): " . substr($alphabet, -5) . "\n";
echo "Slice from index 5 to 5 chars from end: " . substr($alphabet, 5, -5) . "\n";

// --- 7. Escape Characters ---
// Available in double-quoted strings: \", \', \$, \n, \r, \t, \ooo (octal), \xhh (hex)
$escaped = "She said, \"PHP is great!\" and it costs \$0.\nLine two starts with a\ttab.";
echo $escaped . "\n";
