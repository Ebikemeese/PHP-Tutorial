<?php
/**
 * W3Schools PHP Tutorial: PHP Sorting Arrays
 * 
 * PHP array sorting functions:
 * - sort()   - sort arrays in ascending order
 * - rsort()  - sort arrays in descending order
 * - asort()  - sort associative arrays in ascending order, by value
 * - ksort()  - sort associative arrays in ascending order, by key
 * - arsort() - sort associative arrays in descending order, by value
 * - krsort() - sort associative arrays in descending order, by key
 * - usort()  - sort arrays using a user-defined comparison function
 */

// --- 1. sort() - Ascending Order ---
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
echo "sort() cars ascending:\n";
print_r($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo "sort() numbers ascending:\n";
print_r($numbers);

// --- 2. rsort() - Descending Order ---
$carsDesc = array("Volvo", "BMW", "Toyota");
rsort($carsDesc);
echo "rsort() cars descending:\n";
print_r($carsDesc);

// --- 3. asort() vs ksort() - Associative Array Sorting ---
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

// asort(): sorts by VALUE ascending (Peter 35, Ben 37, Joe 43)
$ageByValue = $age;
asort($ageByValue);
echo "asort() by value ascending:\n";
print_r($ageByValue);

// ksort(): sorts by KEY ascending (Ben, Joe, Peter)
$ageByKey = $age;
ksort($ageByKey);
echo "ksort() by key ascending:\n";
print_r($ageByKey);

// --- 4. arsort() vs krsort() - Associative Descending ---
// arsort(): sorts by VALUE descending
$ageDescVal = $age;
arsort($ageDescVal);
echo "arsort() by value descending:\n";
print_r($ageDescVal);

// krsort(): sorts by KEY descending
$ageDescKey = $age;
krsort($ageDescKey);
echo "krsort() by key descending:\n";
print_r($ageDescKey);

// --- 5. Custom Sorting with usort() ---
$inventory = [
    ["item" => "Laptop", "price" => 1200],
    ["item" => "Mouse",  "price" => 25],
    ["item" => "Desk",   "price" => 350],
];

// Sort products by price ascending using spaceship operator <=>
usort($inventory, function($a, $b) {
    return $a['price'] <=> $b['price'];
});

echo "usort() custom sort by price ascending:\n";
print_r($inventory);
