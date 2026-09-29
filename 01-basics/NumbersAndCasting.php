<?php
/**
 * W3Schools PHP Tutorial: PHP Numbers & Type Casting
 * 
 * PHP provides automatic data type conversion.
 * Three main numeric types: Integer, Float, and Number strings.
 * Explicit type casting allows converting between data types.
 */

// --- 1. PHP Integers & Inspection ---
$intNum = 5985;
echo "Is $intNum integer? " . (is_int($intNum) ? "Yes" : "No") . "\n";
echo "PHP_INT_MAX: " . PHP_INT_MAX . "\n";
echo "PHP_INT_MIN: " . PHP_INT_MIN . "\n";
echo "PHP_INT_SIZE: " . PHP_INT_SIZE . " bytes\n";

// --- 2. PHP Floats & Inspection ---
$floatNum = 10.365;
echo "Is $floatNum float? " . (is_float($floatNum) ? "Yes" : "No") . "\n";
echo "PHP_FLOAT_MAX: " . PHP_FLOAT_MAX . "\n";
echo "PHP_FLOAT_MIN: " . PHP_FLOAT_MIN . "\n";

// --- 3. PHP Infinity and NaN ---
$hugeValue = 1.9e411; // Value larger than PHP_FLOAT_MAX becomes INF
echo "Is hugeValue infinite? " . (is_infinite($hugeValue) ? "Yes" : "No") . "\n";

$invalidCalculation = acos(8); // Invalid math returns NaN (Not a Number)
echo "Is acos(8) NaN? " . (is_nan($invalidCalculation) ? "Yes" : "No") . "\n";

// --- 4. PHP Numerical Strings ---
// is_numeric() checks whether a variable is a number or numeric string
$numericStr = "5985";
$nonNumericStr = "Hello 5985";
echo "'$numericStr' is numeric? " . (is_numeric($numericStr) ? "Yes" : "No") . "\n";
echo "'$nonNumericStr' is numeric? " . (is_numeric($nonNumericStr) ? "Yes" : "No") . "\n";

// --- 5. PHP Type Casting ---
// (string) - Converts to data type String
// (int)    - Converts to data type Integer
// (float)  - Converts to data type Float
// (bool)   - Converts to data type Boolean
// (array)  - Converts to data type Array
// (object) - Converts to data type Object

$originalFloat = 23465.768;
$intCast = (int)$originalFloat;
echo "Float to Int: $originalFloat -> $intCast\n";

$stringNum = "123.456 meters";
$floatCast = (float)$stringNum;
echo "String to Float: '$stringNum' -> $floatCast\n";

$zero = 0;
$boolCast = (bool)$zero;
echo "0 to Bool: ";
var_dump($boolCast); // false

$nonEmptyStr = "Hello";
$boolCast2 = (bool)$nonEmptyStr;
echo "'Hello' to Bool: ";
var_dump($boolCast2); // true

// Cast to Array
$scalar = "Single string value";
$arrayCast = (array)$scalar;
echo "Scalar to Array: ";
print_r($arrayCast);

// Cast to Object
$personArray = array("name" => "Peter", "age" => 35);
$personObj = (object)$personArray;
echo "Array to Object: " . $personObj->name . ", " . $personObj->age . " years old\n";
