<?php
/**
 * W3Schools PHP Tutorial: PHP Superglobals - $_SERVER
 * 
 * $_SERVER is an array containing information such as headers, paths, and script locations.
 * The entries in this array are created by the web server.
 */

echo "--- Useful \$_SERVER Elements ---\n";

// PHP_SELF: Returns the filename of the currently executing script
echo "PHP_SELF: " . ($_SERVER['PHP_SELF'] ?? 'CLI execution') . "\n";

// SCRIPT_NAME: Returns the path of the current script
echo "SCRIPT_NAME: " . ($_SERVER['SCRIPT_NAME'] ?? __FILE__) . "\n";

// SCRIPT_FILENAME: Absolute pathname of the currently executing script
echo "SCRIPT_FILENAME: " . ($_SERVER['SCRIPT_FILENAME'] ?? __FILE__) . "\n";

// SERVER_NAME: Returns the name of the host server (e.g. www.w3schools.com)
echo "SERVER_NAME: " . ($_SERVER['SERVER_NAME'] ?? 'localhost') . "\n";

// HTTP_HOST: Returns the Host header from the current request
echo "HTTP_HOST: " . ($_SERVER['HTTP_HOST'] ?? 'localhost:8000') . "\n";

// REQUEST_METHOD: Returns the request method used to access the page (such as POST or GET)
echo "REQUEST_METHOD: " . ($_SERVER['REQUEST_METHOD'] ?? 'GET (CLI)') . "\n";

// SERVER_PROTOCOL: Name and revision of the information protocol (e.g. HTTP/1.1)
echo "SERVER_PROTOCOL: " . ($_SERVER['SERVER_PROTOCOL'] ?? 'HTTP/1.1') . "\n";

// GATEWAY_INTERFACE: Version of the CGI specification server is using
echo "GATEWAY_INTERFACE: " . ($_SERVER['GATEWAY_INTERFACE'] ?? 'CGI/1.1') . "\n";

// HTTP_USER_AGENT: Browser user agent string
echo "HTTP_USER_AGENT: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Console/Terminal') . "\n";

// Checking if HTTPS is active
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "Yes" : "No";
echo "Is HTTPS enabled: $isHttps\n";
