<?php
/**
 * W3Schools PHP Tutorial: PHP Data Types
 * 
 * Variables can store data of different types:
 * - String
 * - Integer
 * - Float (floating point numbers - also called double)
 * - Boolean
 * - Array
 * - Object
 * - NULL
 * - Resource
 * The var_dump() function returns the data type and the value.
 */

// 1. String: A sequence of characters inside single or double quotes
$strVal = "Hello PHP Developer!";
var_dump($strVal);

// 2. Integer: Non-decimal number between -2,147,483,648 and 2,147,483,647 (on 32-bit systems)
$intVal = 5985;
var_dump($intVal);

// 3. Float / Double: Number with a decimal point or in exponential form
$floatVal = 10.365;
$sciVal = 2.4e3;
var_dump($floatVal);
var_dump($sciVal);

// 4. Boolean: Represents two possible states: TRUE or FALSE
$isPhpFun = true;
$isHard = false;
var_dump($isPhpFun);
var_dump($isHard);

// 5. Array: Stores multiple values in one single variable
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

// 6. Object: An instance of a class that packages data and functions
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo $myCar->message() . "\n";

// 7. NULL Value: Special data type which can have only one value: NULL
// A variable of data type NULL is a variable that has no value assigned to it.
$nullVal = "Already has a value";
$nullVal = null;
var_dump($nullVal);

// 8. Resource: A special variable holding a reference to an external resource (e.g., database call, open file)
$fileResource = fopen(__FILE__, "r");
var_dump($fileResource);
if (is_resource($fileResource)) {
    fclose($fileResource);
}
