<?php
/**
 * W3Schools PHP Tutorial: PHP Namespaces
 * 
 * Namespaces are qualifiers that solve two problems:
 * 1. Allow better organization by grouping classes that work together to perform a task.
 * 2. Allow the same name to be used for more than one class without naming collisions.
 * 
 * Rules:
 * - A namespace declaration MUST be the very first statement in the PHP file.
 * - 'use' keyword imports a namespace or class into the current scope.
 * - 'as' keyword creates an alias.
 */

namespace App\Services;

class NotificationService {
    public function send(string $message): void {
        echo "[App Notification] $message\n";
    }
}

// Sub-namespace demonstration within the same file (enclosed in curly braces for multi-namespace file demo)
namespace ThirdParty\Payment {
    class NotificationService {
        public function send(string $message): void {
            echo "[Payment Gateway Notification] $message\n";
        }
    }
}

namespace App\Controllers {
    // Importing classes from different namespaces and aliasing one to prevent name collision!
    use App\Services\NotificationService as AppNotifier;
    use ThirdParty\Payment\NotificationService as GatewayNotifier;

    class CheckoutController {
        public function handle(): void {
            $localNotifier = new AppNotifier();
            $localNotifier->send("Order has been placed.");

            $remoteNotifier = new GatewayNotifier();
            $remoteNotifier->send("Payment charged successfully.");
        }
    }

    $controller = new CheckoutController();
    $controller->handle();
}
