<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Traits
 * 
 * PHP only supports single inheritance (a class can only inherit from one parent class).
 * Traits solve this problem by enabling code reuse across independent classes.
 * Traits are declared with the 'trait' keyword and used inside classes with 'use'.
 */

// --- 1. Defining Traits ---
trait MessageLogger {
    public function log(string $msg): void {
        echo "[LOG] $msg\n";
    }
}

trait Formatter {
    public function formatJson(array $data): string {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}

// --- 2. Using Multiple Traits in a Class ---
class OrderService {
    use MessageLogger, Formatter;

    public function processOrder(int $orderId, float $amount): void {
        $this->log("Processing order #$orderId for amount $$amount");
        $data = ["order_id" => $orderId, "amount" => $amount, "status" => "Completed"];
        echo "Order JSON Output:\n" . $this->formatJson($data) . "\n";
    }
}

$service = new OrderService();
$service->processOrder(1001, 89.95);

// --- 3. Handling Trait Method Conflicts (insteadof and as) ---
trait TraitA {
    public function sayGreeting() {
        echo "Greeting from TraitA\n";
    }
}

trait TraitB {
    public function sayGreeting() {
        echo "Greeting from TraitB\n";
    }
}

class ConflictResolver {
    use TraitA, TraitB {
        // Resolve conflict: use TraitB's method instead of TraitA
        TraitB::sayGreeting insteadof TraitA;
        // Provide an alias for TraitA's method
        TraitA::sayGreeting as greetFromA;
    }
}

$resolver = new ConflictResolver();
$resolver->sayGreeting(); // Calls TraitB version
$resolver->greetFromA();   // Calls TraitA aliased version
