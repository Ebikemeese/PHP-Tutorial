<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Classes and Objects
 * 
 * - A class is a template / blueprint for objects.
 * - An object is an instance of a class.
 * - Properties are variables inside a class.
 * - Methods are functions inside a class.
 * - $this refers to the current object.
 * - instanceof keyword checks if an object belongs to a specific class.
 */

// --- 1. Defining a Class ---
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    public function set_name($name) {
        $this->name = $name; // $this refers to the calling object
    }

    public function get_name() {
        return $this->name;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function get_color() {
        return $this->color;
    }
}

// --- 2. Creating Object Instances with 'new' ---
$apple = new Fruit();
$banana = new Fruit();

// --- 3. Setting and Getting Object State ---
$apple->set_name('Apple');
$apple->set_color('Red');

$banana->set_name('Banana');
$banana->set_color('Yellow');

echo "Fruit 1: " . $apple->get_name() . " is " . $apple->get_color() . "\n";
echo "Fruit 2: " . $banana->get_name() . " is " . $banana->get_color() . "\n";

// Direct property access (since properties are public)
$apple->color = "Green";
echo "Apple color updated directly: " . $apple->color . "\n";

// --- 4. The instanceof Keyword ---
echo "Is \$apple an instance of Fruit? " . ($apple instanceof Fruit ? "Yes" : "No") . "\n";
echo "Is \$apple an instance of stdClass? " . ($apple instanceof stdClass ? "Yes" : "No") . "\n";
