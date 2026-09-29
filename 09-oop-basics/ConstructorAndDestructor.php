<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Constructor & Destructor
 * 
 * - A constructor allows you to initialize an object's properties upon creation of the object.
 *   PHP uses __construct() for constructors.
 * - A destructor is called when the object is destructed or the script was stopped or exited.
 *   PHP uses __destruct() for destructors.
 * - PHP 8 introduced Constructor Property Promotion for cleaner syntax.
 */

// --- 1. Traditional Constructor & Destructor ---
class Car {
    public $brand;
    public $color;

    // Constructor: executes automatically upon instantiation
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        echo "[Constructor] Car created: $this->color $this->brand\n";
    }

    public function drive() {
        echo "Driving the $this->color $this->brand...\n";
    }

    // Destructor: executes when object is destroyed or at end of script
    public function __destruct() {
        echo "[Destructor] Car object ($this->brand) is being destroyed.\n";
    }
}

$volvo = new Car("Volvo", "White");
$volvo->drive();

// Triggering destructor explicitly by unsetting object reference
unset($volvo);
echo "After unsetting \$volvo.\n\n";

// --- 2. PHP 8+ Constructor Property Promotion ---
// Eliminates repetitive property declarations and assignments
class ModernProduct {
    public function __construct(
        public string $title,
        public float $price,
        public int $quantity = 1
    ) {
        echo "[ModernProduct] Created: $this->title ($$this->price, qty: $this->quantity)\n";
    }

    public function getTotalValue(): float {
        return $this->price * $this->quantity;
    }
}

$laptop = new ModernProduct("ThinkPad X1", 1299.99, 2);
echo "Total value: $" . $laptop->getTotalValue() . "\n";
