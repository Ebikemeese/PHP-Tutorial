<?php
/**
 * W3Schools PHP Tutorial: PHP Constants & Magic Constants
 * 
 * Constants are like variables, except that once they are defined they cannot be changed or undefined.
 * A valid constant name starts with a letter or underscore (no $ sign before constant names).
 * Constants are automatically GLOBAL across the entire script.
 */

// --- 1. Defining Constants using define() ---
// Syntax: define(name, value)
define("GREETING", "Welcome to W3Schools PHP Tutorial!");
echo GREETING . "\n";

// --- 2. Defining Constants using 'const' keyword ---
// 'const' is defined at compile time, whereas define() is at runtime
const APP_VERSION = "2.5.0";
echo "App Version: " . APP_VERSION . "\n";

// --- 3. Constant Arrays ---
define("CARS", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo "First car from constant array: " . CARS[0] . "\n";

// --- 4. Constants are Global ---
function testConstantScope() {
    // Constants can be accessed inside functions without 'global' keyword
    echo "Accessing inside function: " . GREETING . "\n";
}
testConstantScope();

// --- 5. PHP Magic Constants ---
// Predefined constants that change depending on where they are used:
echo "--- Magic Constants ---\n";
echo "Current Line Number (__LINE__): " . __LINE__ . "\n";
echo "Current Full File Path (__FILE__): " . __FILE__ . "\n";
echo "Current Directory (__DIR__): " . __DIR__ . "\n";

function sampleMagicFunction() {
    echo "Current Function Name (__FUNCTION__): " . __FUNCTION__ . "\n";
}
sampleMagicFunction();

class MagicDemo {
    public function showMagic() {
        echo "Current Class Name (__CLASS__): " . __CLASS__ . "\n";
        echo "Current Method Name (__METHOD__): " . __METHOD__ . "\n";
    }
}
$demo = new MagicDemo();
$demo->showMagic();

trait MagicTraitDemo {
    public function printTrait() {
        echo "Current Trait Name (__TRAIT__): " . __TRAIT__ . "\n";
    }
}
