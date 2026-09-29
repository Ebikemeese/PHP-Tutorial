<?php
/**
 * W3Schools PHP Tutorial: PHP Cookies and Sessions
 * 
 * - Cookies: Small files stored on the user's computer to identify a user.
 *   Created with setcookie() and accessed with $_COOKIE.
 * - Sessions: Store user information on the server across multiple pages.
 *   Started with session_start() and accessed with $_SESSION.
 */

// --- 1. Working with Cookies ---
// Syntax: setcookie(name, value, expire, path, domain, secure, httponly);
// Note: setcookie() must be sent before any output in web scripts.
$cookieName = "user";
$cookieValue = "John Doe";
$expireTime = time() + (86400 * 30); // 86400 = 1 day -> 30 days

echo "--- Cookie Demonstration ---\n";
echo "Cookie creation syntax:\nsetcookie('$cookieName', '$cookieValue', $expireTime, '/');\n";

// Simulating cookie reception
$_COOKIE[$cookieName] = $cookieValue;

if (isset($_COOKIE[$cookieName])) {
    echo "Cookie '" . $cookieName . "' is set! Value: " . $_COOKIE[$cookieName] . "\n";
} else {
    echo "Cookie named '" . $cookieName . "' is not set!\n";
}

// Deleting a Cookie (Set expiration date to the past)
echo "Deleting cookie syntax: setcookie('$cookieName', '', time() - 3600, '/');\n";

// --- 2. Working with Sessions ---
// A session starts with session_start(). Session variables are stored in $_SESSION.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo "\n--- Session Demonstration ---\n";
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["user_id"] = 1042;
echo "Session variables are set.\n";

// Accessing session variables
echo "Favorite color: " . $_SESSION["favcolor"] . "\n";
echo "Favorite animal: " . $_SESSION["favanimal"] . "\n";
echo "User ID: " . $_SESSION["user_id"] . "\n";

// Modifying session variable
$_SESSION["favcolor"] = "yellow";
echo "Updated favorite color: " . $_SESSION["favcolor"] . "\n";

// Print all session variables
echo "Full \$_SESSION array:\n";
print_r($_SESSION);

// Destroying the session
// session_unset() removes all session variables
session_unset();
// session_destroy() destroys the session
session_destroy();
echo "Session unset and destroyed successfully.\n";
