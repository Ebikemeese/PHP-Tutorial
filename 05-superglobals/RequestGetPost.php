<?php
/**
 * W3Schools PHP Tutorial: PHP Superglobals - $_REQUEST, $_POST, and $_GET
 * 
 * - $_REQUEST is an associative array that contains contents of $_GET, $_POST, and $_COOKIE.
 * - $_POST collects data from an HTML form submitted with method="post".
 *   Values are invisible in URL, no size limit, safe for passwords and sensitive data.
 * - $_GET collects data sent via URL parameters (query string) or form submitted with method="get".
 *   Values are visible in the URL (e.g., page.php?id=5), bookmarketable, max length ~2048 chars.
 */

// --- 1. Simulating and Handling $_GET Requests ---
// In a web server context, URL parameters like ?name=John&subject=PHP populate $_GET
if (empty($_GET)) {
    // Demonstration mock data if running from CLI
    $_GET['name'] = "John Doe";
    $_GET['subject'] = "PHP Tutorial";
}

echo "--- \$_GET Handling ---\n";
$name = htmlspecialchars($_GET['name'] ?? '');
$subject = htmlspecialchars($_GET['subject'] ?? '');
echo "Received via GET: Name='$name', Subject='$subject'\n";

// --- 2. Simulating and Handling $_POST Requests ---
// In a web server context, form submissions populate $_POST
if (empty($_POST)) {
    // Demonstration mock data if running from CLI
    $_POST['username'] = "johndoe";
    $_POST['email'] = "john@example.com";
}

echo "\n--- \$_POST Handling ---\n";
$username = htmlspecialchars($_POST['username'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
echo "Received via POST: Username='$username', Email='$email'\n";

// --- 3. Handling $_REQUEST ---
// $_REQUEST captures both GET and POST data
echo "\n--- \$_REQUEST Handling ---\n";
$requestedUser = $_REQUEST['username'] ?? $_REQUEST['name'] ?? 'Guest';
echo "Identified user through \$_REQUEST: $requestedUser\n";

// --- 4. Comparing GET vs POST ---
echo "\n--- GET vs POST Comparison ---\n";
echo "GET:  Visible in URL, cacheable, bookmarked, length limited, never use for passwords!\n";
echo "POST: Not visible in URL, not cached, not bookmarked, supports binary file uploads.\n";
