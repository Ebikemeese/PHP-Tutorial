<?php
/**
 * W3Schools PHP Tutorial: PHP - AJAX Integration & Live Search
 * 
 * AJAX is used to exchange data with a web server behind the scenes without reloading the page.
 * Typical workflow:
 * 1. An event occurs on a web page (e.g. user types in a search box).
 * 2. An XMLHttpRequest / fetch() request is sent to a PHP script on the server.
 * 3. PHP processes the request (queries array/database) and outputs JSON or HTML.
 * 4. JavaScript receives the response and updates the page dynamically.
 */

// Array of names for auto-complete demonstration (as used in W3Schools tutorial)
$names = [
    "Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege",
    "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda",
    "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet",
    "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky"
];

// Read search parameter 'q' from query string or simulate query
$query = $_REQUEST["q"] ?? "an"; // defaults to 'an' for demonstration
$query = strtolower(trim($query));

$matches = [];

if ($query !== "") {
    $len = strlen($query);
    foreach ($names as $name) {
        if (stristr($query, substr($name, 0, $len))) {
            $matches[] = $name;
        }
    }
}

// In a web environment, set JSON header:
// header('Content-Type: application/json');

echo "--- AJAX Live Search Simulation ---\n";
echo "Search query: '$query'\n";
echo "Matched suggestions:\n";

if (empty($matches)) {
    echo "no suggestion\n";
} else {
    echo implode(", ", $matches) . "\n";
}

echo "\nJSON Response representation:\n";
echo json_encode([
    "query" => $query,
    "count" => count($matches),
    "results" => $matches
], JSON_PRETTY_PRINT) . "\n";
