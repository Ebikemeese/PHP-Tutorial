<?php
/**
 * W3Schools PHP Tutorial: PHP OOP - Access Modifiers & Encapsulation
 * 
 * Properties and methods can have access modifiers which control where they can be accessed:
 * - public (default): The property or method can be accessed from everywhere.
 * - protected: The property or method can be accessed within the class and by classes derived from that class.
 * - private: The property or method can ONLY be accessed within the class.
 */

class BankAccount {
    // Public: Accessible anywhere
    public $accountHolder;

    // Protected: Accessible in this class and child/subclasses
    protected $accountType = "Checking";

    // Private: Accessible ONLY within BankAccount class
    private $balance;

    public function __construct(string $holder, float $initialDeposit) {
        $this->accountHolder = $holder;
        $this->balance = max(0.0, $initialDeposit);
    }

    // Public Getter method to safely read private balance
    public function getBalance(): float {
        return $this->balance;
    }

    // Public Setter method with business logic validation
    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $$amount successfully.\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }

    public function withdraw(float $amount): bool {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew $$amount successfully.\n";
            return true;
        }
        echo "Insufficient funds or invalid withdrawal amount.\n";
        return false;
    }

    // Private helper method
    private function internalAuditLog(): string {
        return "Audit log generated for account: " . $this->accountHolder;
    }
}

$account = new BankAccount("Alice Smith", 500.0);

// Public property accessed directly
echo "Account Holder: " . $account->accountHolder . "\n";

// Private property accessed via Getter
echo "Current Balance: $" . $account->getBalance() . "\n";

// Modifying balance via Encapsulated methods
$account->deposit(250.0);
echo "New Balance: $" . $account->getBalance() . "\n";

$account->withdraw(100.0);
echo "Final Balance: $" . $account->getBalance() . "\n";

// Attempting direct access to private property triggers Fatal Error:
// $account->balance = 1000000; // Error: Cannot access private property
