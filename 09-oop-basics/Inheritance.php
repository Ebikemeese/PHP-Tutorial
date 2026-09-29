<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Inheritance
 * 
 * Inheritance in OOP = When a class derives from another class.
 * The child class will inherit all the public and protected properties and methods from the parent class.
 * Keywords:
 * - extends: Used to derive child class from parent class.
 * - parent::: Used to access parent methods/constructors from child class.
 * - final: Prevents class inheritance or method overriding.
 */

// Superclass (Parent)
class Vehicle {
    protected $brand;
    protected $year;

    public function __construct(string $brand, int $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function honk(): void {
        echo "Tuut, tuut!\n";
    }

    // Final method: CANNOT be overridden in child classes
    final public function getRegistrationType(): string {
        return "Standard Motor Vehicle";
    }

    public function describe(): void {
        echo "Vehicle: $this->brand ($this->year)\n";
    }
}

// Subclass (Child) inheriting from Vehicle
class InheritedCar extends Vehicle {
    private $model;

    public function __construct(string $brand, int $year, string $model) {
        // Call the parent class constructor using parent::__construct()
        parent::__construct($brand, $year);
        $this->model = $model;
    }

    // Overriding the parent describe() method
    public function describe(): void {
        // Accessing inherited protected property $this->brand
        echo "Car Details: $this->brand $this->model ($this->year)\n";
    }
}

// Instantiate child object
$myCar = new InheritedCar("Ford", 2023, "Mustang");

// Call inherited method from parent
$myCar->honk();

// Call overridden method
$myCar->describe();

// Call final parent method
echo "Registration: " . $myCar->getRegistrationType() . "\n";

// --- Final Class Demo ---
// A final class cannot be extended by any other class
final class SealedConfig {
    public static $appName = "MyApplication";
}
// class SubConfig extends SealedConfig {} // Fatal error: Class SubConfig cannot extend final class SealedConfig
