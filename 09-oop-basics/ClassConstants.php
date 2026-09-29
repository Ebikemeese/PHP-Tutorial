<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Class Constants
 * 
 * Class constants cannot be changed once declared.
 * Class constants are case-sensitive and are typically declared in UPPERCASE.
 * We can access a constant from outside the class using the Scope Resolution Operator (::),
 * or from inside the class using the 'self' keyword with ::.
 */

class Goodbye {
    // Public constant (accessible inside and outside)
    public const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!\n";

    // Private constant (accessible only within this class)
    private const SECRET_KEY = "SEC-984321";

    public function byebye() {
        // Accessing constant inside class with self::
        echo self::LEAVING_MESSAGE;
    }

    public function getMaskedSecret() {
        return substr(self::SECRET_KEY, 0, 4) . "****";
    }
}

// 1. Accessing class constant from outside using ClassName::CONSTANT
echo Goodbye::LEAVING_MESSAGE;

// 2. Accessing class constant from inside method
$goodbye = new Goodbye();
$goodbye->byebye();

echo "Masked secret: " . $goodbye->getMaskedSecret() . "\n";
