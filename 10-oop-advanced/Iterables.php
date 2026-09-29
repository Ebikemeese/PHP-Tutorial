<?php
/**
 * W3Schools PHP Tutorial: PHP Iterables
 * 
 * An iterable is any value which can be looped through with a foreach() loop.
 * The iterable pseudo-type was introduced in PHP 7.1.
 * It can be used as a data type for function arguments and return values.
 * Both arrays and objects implementing the Traversable / Iterator interface are iterables.
 */

// --- 1. Function Accepting an Iterable ---
function printIterable(iterable $myIterable): void {
    foreach ($myIterable as $item) {
        echo "- $item\n";
    }
}

// Passing an array as iterable
echo "--- Passing Array to Iterable Parameter ---\n";
$fruits = ["Apple", "Orange", "Cherry"];
printIterable($fruits);

// --- 2. Returning an Iterable from Function ---
function getAlphabetLetters(): iterable {
    return ["A", "B", "C", "D"];
}

echo "\n--- Function Returning Iterable ---\n";
printIterable(getAlphabetLetters());

// --- 3. Using Generators (yield) to Create Memory-Efficient Iterables ---
// A generator allows you to write code that uses foreach to iterate over a set of data
// without needing to build an array in memory.
function countDownGenerator(int $start): iterable {
    for ($i = $start; $i > 0; $i--) {
        yield $i; // Pauses execution and yields the current value
    }
}

echo "\n--- Iterating Generator (yield) ---\n";
foreach (countDownGenerator(5) as $count) {
    echo "Count: $count\n";
}

// --- 4. Custom Class Implementing Iterator ---
class NumberCollection implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct(array $items) {
        $this->items = array_values($items);
    }

    public function current(): mixed { return $this->items[$this->pointer]; }
    public function key(): mixed { return $this->pointer; }
    public function next(): void { $this->pointer++; }
    public function rewind(): void { $this->pointer = 0; }
    public function valid(): bool { return isset($this->items[$this->pointer]); }
}

echo "\n--- Custom Class Implementing Iterator ---\n";
$collection = new NumberCollection([10, 20, 30]);
printIterable($collection);
