<?php
/**
 * W3Schools PHP Tutorial: PHP Filters & Advanced Filters
 * 
 * PHP filters are used to validate and sanitize external user input.
 * - Validating data = Determine if the data is in proper form.
 * - Sanitizing data = Remove any illegal character from the data.
 */

// --- 1. Sanitizing & Validating String / Email ---
$rawEmail = "john.doe(at)example...///com///";
$sanitizedEmail = filter_var($rawEmail, FILTER_SANITIZE_EMAIL);
echo "Original Email:  $rawEmail\n";
echo "Sanitized Email: $sanitizedEmail\n";

$validEmail = "john.doe@example.com";
if (filter_var($validEmail, FILTER_VALIDATE_EMAIL)) {
    echo "$validEmail is a VALID email address.\n";
} else {
    echo "$validEmail is an INVALID email address.\n";
}

// --- 2. Validating Integers and Range ---
$intVal = 122;
$min = 1;
$max = 200;

if (filter_var($intVal, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo "Variable value is not within the legal range of $min to $max.\n";
} else {
    echo "Integer $intVal is valid and within legal range ($min-$max).\n";
}

// Special case: 0 is evaluated as false by default without strict comparison
$zero = 0;
if (filter_var($zero, FILTER_VALIDATE_INT) === 0 || filter_var($zero, FILTER_VALIDATE_INT) === true) {
    echo "Integer 0 is correctly identified.\n";
}

// --- 3. Validating IP Addresses (IPv4 and IPv6) ---
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "$ip is a valid IPv6 address.\n";
}

// --- 4. Sanitizing and Validating URLs with Query String Required ---
$url = "https://www.w3schools.com/php/default.asp?filter=true";
$cleanUrl = filter_var($url, FILTER_SANITIZE_URL);

if (filter_var($cleanUrl, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
    echo "$cleanUrl is a valid URL with a query string!\n";
}

// --- 5. Advanced Filter: FILTER_CALLBACK ---
// Applies a custom user-defined callback function
function convertSpacesToDashes($string) {
    return str_replace(" ", "-", $string);
}

$blogTitle = "Learning PHP Filter Extensions";
$slug = filter_var($blogTitle, FILTER_CALLBACK, array("options" => "convertSpacesToDashes"));
echo "Slug generated via FILTER_CALLBACK: $slug\n";
