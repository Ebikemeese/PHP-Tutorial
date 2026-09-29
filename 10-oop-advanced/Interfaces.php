<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Interfaces
 * 
 * Interfaces allow you to specify what methods a class should implement.
 * Difference between Interfaces and Abstract Classes:
 * 1. Interfaces cannot have instance properties (only constants).
 * 2. All interface methods must be public.
 * 3. All methods in an interface are abstract (cannot have a code body).
 * 4. A class can implement multiple interfaces while extending only one class!
 */

// Interface 1: Animal behavior
interface Animal {
    public function makeSound(): void;
}

// Interface 2: Logger behavior
interface Loggable {
    public function logAction(string $action): void;
}

// Implementing multiple interfaces
class Cat implements Animal, Loggable {
    public function makeSound(): void {
        echo "Meow meow!\n";
    }

    public function logAction(string $action): void {
        echo "[Cat Action]: $action\n";
    }
}

class Dog implements Animal {
    public function makeSound(): void {
        echo "Bark bark!\n";
    }
}

class Mouse implements Animal {
    public function makeSound(): void {
        echo "Squeak squeak!\n";
    }
}

// Polymorphism with interfaces
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat, $dog, $mouse);

echo "--- Interface Polymorphism: Animal Sounds ---\n";
foreach ($animals as $animal) {
    $animal->makeSound();
}

$cat->logAction("Chased laser pointer");
