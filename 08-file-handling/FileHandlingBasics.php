<?php
/**
 * W3Schools PHP Tutorial: PHP File Handling Basics
 * 
 * PHP has several functions for creating, reading, uploading, and editing files.
 * Functions covered:
 * - readfile(): Reads a file and writes it to the output buffer.
 * - file_get_contents(): Reads entire file into a string.
 * - file_put_contents(): Writes data to a file.
 * - file_exists(): Checks whether a file or directory exists.
 * - filesize(): Returns the size of the file in bytes.
 */

$sampleFile = __DIR__ . "/sample_dictionary.txt";

// --- 1. Checking File Existence ---
if (file_exists($sampleFile)) {
    echo "File '$sampleFile' exists!\n";
    echo "File size: " . filesize($sampleFile) . " bytes\n\n";
} else {
    echo "File not found!\n";
}

// --- 2. readfile() Function ---
// Useful when you just want to open a file and read its contents to the output
echo "--- Output using readfile() ---\n";
$bytesRead = readfile($sampleFile);
echo "\n(Bytes read: $bytesRead)\n\n";

// --- 3. file_get_contents() Function ---
// The preferred way to read the contents of a file into a string
echo "--- Output using file_get_contents() ---\n";
$content = file_get_contents($sampleFile);
echo $content . "\n";

// --- 4. file_put_contents() Function ---
// Writes string data directly into a destination file
$outputLog = __DIR__ . "/output_log.txt";
$logData = "[" . date("Y-m-d H:i:s") . "] PHP File handling test completed.\n";

file_put_contents($outputLog, $logData, FILE_APPEND);
echo "Appended log entry to: " . basename($outputLog) . "\n";

// Verify written content
echo "Log file contents:\n" . file_get_contents($outputLog);

// Clean up created log file
if (file_exists($outputLog)) {
    unlink($outputLog);
}
