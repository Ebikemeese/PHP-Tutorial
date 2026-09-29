<?php
/**
 * W3Schools PHP Tutorial: PHP Directory & File System Operations
 * 
 * Functions for inspecting, creating, and removing directories and files:
 * - scandir(): List files and directories inside the specified path.
 * - mkdir(): Makes a new directory.
 * - rmdir(): Removes an empty directory.
 * - copy(): Copies a file.
 * - rename(): Renames a file or moves it to a new path.
 * - unlink(): Deletes a file.
 * - pathinfo(): Returns an array of file path elements.
 */

// --- 1. Path Information with pathinfo() and basename() ---
$currentFilePath = __FILE__;
$pathInfo = pathinfo($currentFilePath);

echo "--- Path Information for Current Script ---\n";
echo "Directory (dirname):   " . $pathInfo['dirname'] . "\n";
echo "Basename (basename):   " . $pathInfo['basename'] . "\n";
echo "Extension (extension): " . $pathInfo['extension'] . "\n";
echo "Filename (filename):   " . $pathInfo['filename'] . "\n\n";

// --- 2. Listing Directory Contents with scandir() ---
echo "--- Scanning Current Directory ---\n";
$files = scandir(__DIR__);
foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        $type = is_dir(__DIR__ . "/" . $file) ? "[DIR] " : "[FILE]";
        echo "$type $file\n";
    }
}

// --- 3. Directory Creation & Removal ---
$testDir = __DIR__ . "/demo_dir";
if (!is_dir($testDir)) {
    mkdir($testDir, 0777, true);
    echo "\nDirectory created: demo_dir\n";
}

// --- 4. File Copy, Rename, and Delete ---
$sourceFile = $testDir . "/sample.txt";
file_put_contents($sourceFile, "Hello World from PHP File Operations!");

$copiedFile = $testDir . "/sample_copied.txt";
copy($sourceFile, $copiedFile);
echo "File copied successfully.\n";

$renamedFile = $testDir . "/sample_renamed.txt";
rename($copiedFile, $renamedFile);
echo "File renamed successfully.\n";

// Cleaning up created files
unlink($sourceFile);
unlink($renamedFile);
rmdir($testDir);
echo "Cleaned up demo files and directory.\n";
