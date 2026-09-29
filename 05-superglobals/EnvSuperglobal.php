<?php
/**
 * W3Schools PHP Tutorial: PHP Superglobals - $_ENV & Environment Variables
 * 
 * $_ENV is an associative array of variables passed to the current script via the environment method.
 * Environment variables are commonly used for database credentials, API keys, and environment settings.
 */

// --- 1. Setting Environment Variables with putenv() ---
putenv("APP_ENV=development");
putenv("APP_DEBUG=true");
putenv("DB_HOST=127.0.0.1");

// --- 2. Reading Environment Variables with getenv() ---
$appEnv = getenv("APP_ENV");
$appDebug = getenv("APP_DEBUG");
$dbHost = getenv("DB_HOST");

echo "APP_ENV: " . ($appEnv ?: 'Not set') . "\n";
echo "APP_DEBUG: " . ($appDebug ?: 'false') . "\n";
echo "DB_HOST: " . ($dbHost ?: 'localhost') . "\n";

// --- 3. Reading System Environment Variables ---
// Examples: PATH, OS, USERNAME / USER
$os = getenv("OS") ?: "Unknown OS";
$path = getenv("PATH");
echo "Host Operating System: $os\n";
echo "PATH preview: " . substr($path, 0, 50) . "...\n";

// --- 4. $_ENV Superglobal ---
// Note: Depending on variables_order in php.ini, $_ENV may be populated
if (!empty($_ENV)) {
    echo "\$_ENV is populated with " . count($_ENV) . " variables.\n";
} else {
    echo "\$_ENV empty by default in CLI unless enabled in php.ini (use getenv() instead).\n";
}
