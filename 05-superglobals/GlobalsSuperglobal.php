<?php
/**
 * W3Schools PHP Tutorial: PHP Superglobals - $GLOBALS
 * 
 * Superglobals are predefined variables in PHP that are always accessible,
 * regardless of scope - and you can access them from any function, class or file
 * without having to do anything special.
 * 
 * PHP Global variables:
 * - $GLOBALS
 * - $_SERVER
 * - $_REQUEST
 * - $_POST
 * - $_GET
 * - $_FILES
 * - $_ENV
 * - $_COOKIE
 * - $_SESSION
 */

// --- 1. $GLOBALS Definition and Access ---
// $GLOBALS is an associative array containing references to all variables
// which are currently defined in the global scope of the script.

$x = 75;
$y = 25;

function addition() {
    // Accessing variables via $GLOBALS directly without the 'global' keyword
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo "Sum calculated using \$GLOBALS: " . $z . "\n";

// --- 2. Inspecting Global Variables ---
$appConfig = "Production";

function updateConfig($newStatus) {
    $GLOBALS['appConfig'] = $newStatus;
}

echo "Initial config: $appConfig\n";
updateConfig("Development");
echo "Updated config via \$GLOBALS: $appConfig\n";
