<?php
/**
 * W3Schools PHP Tutorial: PHP Multidimensional Arrays
 * 
 * A multidimensional array is an array containing one or more arrays.
 * PHP supports two, three, four, five, or more levels deep arrays,
 * though two or three levels are most common.
 */

// --- 1. Two-Dimensional Array (2D Array) ---
// Row format: [Car Brand, Stock, Sold]
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// Accessing individual elements: $cars[row][column]
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".\n";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".\n";

// --- 2. Iterating a 2D Array with Nested Loops ---
echo "\n--- Inventory Report (Nested for loop) ---\n";
for ($row = 0; $row < count($cars); $row++) {
    echo "Row number $row:\n";
    for ($col = 0; $col < count($cars[$row]); $col++) {
        echo "  [" . $cars[$row][$col] . "]";
    }
    echo "\n";
}

// --- 3. Associative Multidimensional Array ---
$students = [
    "Alice" => [
        "Math" => 95,
        "Science" => 89,
        "English" => 92
    ],
    "Bob" => [
        "Math" => 78,
        "Science" => 85,
        "English" => 80
    ]
];

echo "\n--- Student Report Card ---\n";
foreach ($students as $studentName => $grades) {
    echo "Student: $studentName\n";
    foreach ($grades as $subject => $grade) {
        echo "  - $subject: $grade\n";
    }
}
