<?php
/**
 * W3Schools PHP Tutorial: PHP Custom Exception Classes
 * 
 * Creating a custom exception class is quite simple.
 * You create a class with methods that can be called when an exception is thrown.
 * The custom class MUST extend the built-in Exception class.
 * Multiple catch blocks can be used to catch different types of exceptions.
 */

// Custom Exception 1: Invalid Email
class InvalidEmailException extends Exception {
    public function errorMessage(): string {
        return "Error on line " . $this->getLine() . " in " . basename($this->getFile())
            . ": <b>" . $this->getMessage() . "</b> is not a valid E-Mail address.";
    }
}

// Custom Exception 2: Empty Input
class EmptyInputException extends Exception {}

function validateSubscriber(string $email): void {
    if (empty(trim($email))) {
        throw new EmptyInputException("Subscriber email cannot be blank.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidEmailException($email);
    }
    echo "Subscriber '$email' registered successfully!\n";
}

$emailsToTest = ["", "invalid-format-email", "subscriber@domain.com"];

foreach ($emailsToTest as $testEmail) {
    try {
        echo "Testing: '$testEmail' -> ";
        validateSubscriber($testEmail);
    } catch (EmptyInputException $e) {
        // First catch block handles EmptyInputException
        echo "Handled EmptyInputException: " . $e->getMessage() . "\n";
    } catch (InvalidEmailException $e) {
        // Second catch block handles InvalidEmailException
        echo "Handled InvalidEmailException: " . $e->errorMessage() . "\n";
    } catch (Exception $e) {
        // Fallback catch block handles generic Exceptions
        echo "Handled Generic Exception: " . $e->getMessage() . "\n";
    }
}
