<?php
/**
 * W3Schools PHP Tutorial: PHP Form Validation and Security Sanitization
 * 
 * When processing PHP forms, think SECURITY!
 * Form validation prevents cross-site scripting (XSS) and injection attacks.
 * 
 * Recommended Sanitization Workflow:
 * 1. trim() - Strip unnecessary characters (extra space, tab, newline)
 * 2. stripslashes() - Remove backslashes (\)
 * 3. htmlspecialchars() - Convert special characters to HTML entities to prevent XSS
 */

// --- 1. Reusable Sanitization Function (Standard W3Schools Pattern) ---
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// --- 2. Demonstrating Sanitization against Malicious Input (XSS) ---
$maliciousInput = "  <script>alert('Hacked!');</script> \\O'Reilly\\   ";
echo "Original Input:\n$maliciousInput\n\n";

$cleanInput = test_input($maliciousInput);
echo "Sanitized Clean Input:\n$cleanInput\n\n";

// --- 3. Processing User Form Fields ---
$rawFields = [
    "username" => "   alice_developer   ",
    "bio"      => "Web programmer & enthusiast <php> ",
    "website"  => "https://example.com/\" onclick=\"malicious()"
];

$sanitizedFields = [];
foreach ($rawFields as $field => $rawVal) {
    $sanitizedFields[$field] = test_input($rawVal);
}

echo "Sanitized Output Fields:\n";
print_r($sanitizedFields);
