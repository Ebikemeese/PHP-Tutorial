<?php
/**
 * W3Schools PHP Tutorial: PHP Form URL and E-mail Validation
 * 
 * Validating specific field formats:
 * - Name: letters and whitespace only (regex: /^[a-zA-Z-' ]*$/)
 * - E-mail: valid syntax (filter_var with FILTER_VALIDATE_EMAIL)
 * - Website URL: valid syntax (filter_var with FILTER_VALIDATE_URL)
 */

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Sample test cases to validate
$testUsers = [
    [
        "name"    => "John Doe",
        "email"   => "john.doe@example.com",
        "website" => "https://www.example.com"
    ],
    [
        "name"    => "John123!@",
        "email"   => "invalid-email-at-domain",
        "website" => "not-a-valid-url"
    ]
];

foreach ($testUsers as $index => $user) {
    echo "--- Validating Test Case #" . ($index + 1) . " ---\n";
    $name = test_input($user["name"]);
    $email = test_input($user["email"]);
    $website = test_input($user["website"]);

    // 1. Validate Name (letters and spaces only)
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        echo "Name Error: Only letters and white space allowed ('$name')\n";
    } else {
        echo "Name Valid: $name\n";
    }

    // 2. Validate E-mail Address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email Error: Invalid email format ('$email')\n";
    } else {
        echo "Email Valid: $email\n";
    }

    // 3. Validate Website URL
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        echo "URL Error: Invalid URL ('$website')\n";
    } else {
        echo "URL Valid: $website\n";
    }
    echo "\n";
}
