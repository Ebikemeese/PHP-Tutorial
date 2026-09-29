<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Abstract Classes
 * 
 * An abstract class contains at least one abstract method.
 * An abstract method is a method that is declared, but has no implementation code in its body.
 * Rules for Abstract Classes:
 * 1. An abstract class cannot be instantiated directly with 'new'.
 * 2. Child classes inheriting an abstract class must define all abstract methods.
 * 3. The child method must have the same or less restricted access modifier.
 * 4. Required arguments must be identical (child can add optional parameters).
 */

// Parent abstract class
abstract class AbstractCar {
    public $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    // Abstract method: must be implemented by child classes
    abstract public function intro(): string;
}

// Child classes implementing the abstract method
class Audi extends AbstractCar {
    public function intro(): string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends AbstractCar {
    public function intro(): string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends AbstractCar {
    public function intro(): string {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new Audi("Audi A6");
echo $audi->intro() . "\n";

$volvo = new Volvo("Volvo XC90");
echo $volvo->intro() . "\n";

$citroen = new Citroen("Citroen C4");
echo $citroen->intro() . "\n";
