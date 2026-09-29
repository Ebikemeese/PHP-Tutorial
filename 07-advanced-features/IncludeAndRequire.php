<?php
/**
 * W3Schools PHP Tutorial: PHP Include and Require Files
 * 
 * The include (or require) statement takes all the text/code/markup that exists
 * in the specified file and copies it into the file that uses the statement.
 * 
 * Difference between include and require:
 * - require: will produce a FATAL ERROR (E_COMPILE_ERROR) and stop the script if file is not found.
 * - include: will only produce a WARNING (E_WARNING) and the script will CONTINUE to run.
 * - require_once / include_once: checks if the file has already been included; if so, does not include again.
 */

// --- 1. Creating a temporary reusable header/menu component ---
$tempMenuFile = __DIR__ . "/_menu_component.php";
file_put_contents($tempMenuFile, '<?php
echo "[MENU] Home | Tutorials | Contact | About\n";
$companyName = "TechNova Solutions";
');

// --- 2. Demonstrating include ---
echo "--- Testing include ---\n";
include $tempMenuFile;
echo "Company Name from included file: $companyName\n";

// --- 3. Demonstrating include_once / require_once ---
echo "\n--- Testing require_once ---\n";
require_once $tempMenuFile; // Re-including does not execute or redeclare again!
echo "require_once ensured no duplicate loading.\n";

// --- 4. Comparing Missing File Behavior ---
echo "\n--- Behavior when file is missing ---\n";
echo "1. 'include \"missing.php\"' emits a warning but execution proceeds.\n";
echo "2. 'require \"missing.php\"' throws a fatal error and immediately terminates execution.\n";

// Clean up demo file
if (file_exists($tempMenuFile)) {
    unlink($tempMenuFile);
}
