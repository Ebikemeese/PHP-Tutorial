<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Static Methods and Static Properties
 * 
 * - Static methods can be called directly without creating an instance of a class.
 * - Static properties can be called directly without creating an instance of a class.
 * - Accessed using the Scope Resolution Operator (::).
 * - Inside the class: self::$property or self::method()
 * - Child classes: parent::$property or parent::method()
 * - Late Static Binding: static::$property allows runtime polymorphism of static members.
 */

// --- 1. Static Methods ---
class MathUtility {
    // Static property
    public static $pi = 3.14159;

    // Static method
    public static function square(float $num): float {
        return $num * $num;
    }

    public static function circleArea(float $radius): float {
        // Accessing static property inside class with self::
        return self::$pi * self::square($radius);
    }
}

// Calling static method directly without instantiation
echo "Square of 8: " . MathUtility::square(8) . "\n";
echo "Circle area (r=5): " . MathUtility::circleArea(5) . "\n";
echo "Accessing static property directly: " . MathUtility::$pi . "\n\n";

// --- 2. Calling Static Parent Methods ---
class BaseDomain {
    public static function getDomain(): string {
        return "w3schools.com";
    }
}

class SubDomain extends BaseDomain {
    public function getFullUrl(): string {
        // Calling parent static method with parent::
        return "https://php." . parent::getDomain();
    }
}

$sub = new SubDomain();
echo "Full URL via parent:: static call: " . $sub->getFullUrl() . "\n\n";

// --- 3. Late Static Binding (self:: vs static::) ---
class Model {
    protected static $tableName = "base_table";

    public static function getTableSelf(): string {
        return self::$tableName; // Evaluated at compile time (Base Model)
    }

    public static function getTableLate(): string {
        return static::$tableName; // Evaluated at RUNTIME (Late Static Binding)
    }
}

class User extends Model {
    protected static $tableName = "users";
}

echo "Using self:: on User class:   " . User::getTableSelf() . "\n"; // outputs base_table
echo "Using static:: on User class: " . User::getTableLate() . "\n"; // outputs users
