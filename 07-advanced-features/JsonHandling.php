<?php
/**
 * W3Schools PHP Tutorial: PHP and JSON
 * 
 * JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
 * Built-in PHP functions:
 * - json_encode(): Used to encode a value to JSON format.
 * - json_decode(): Used to decode a JSON object into a PHP object or an associative array.
 */

// --- 1. json_encode() with Indexed and Associative Arrays ---
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
$jsonStr = json_encode($age);
echo "json_encode associative array:\n$jsonStr\n\n";

$cars = array("Volvo", "BMW", "Toyota");
echo "json_encode indexed array:\n" . json_encode($cars) . "\n\n";

// --- 2. json_decode() to PHP Object (Default) ---
$jsonObjStr = '{"Peter":35,"Ben":37,"Joe":43}';
$phpObj = json_decode($jsonObjStr);

echo "Decoded as Object:\n";
var_dump($phpObj);
echo "Accessing property Peter: " . $phpObj->Peter . "\n\n";

// --- 3. json_decode() to PHP Associative Array (Second param = true) ---
$phpArr = json_decode($jsonObjStr, true);

echo "Decoded as Associative Array:\n";
var_dump($phpArr);
echo "Accessing key Peter: " . $phpArr['Peter'] . "\n\n";

// --- 4. Iterating Decoded JSON ---
echo "--- Looping through decoded associative array ---\n";
foreach ($phpArr as $name => $years) {
    echo "$name is $years years old.\n";
}

// --- 5. JSON Error Handling ---
$malformedJson = "{'name': 'invalid single quotes'}";
$result = json_decode($malformedJson);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "\nJSON Error Detected: " . json_last_error_msg() . "\n";
}
