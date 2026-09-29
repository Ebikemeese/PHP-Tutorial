<?php
/**
 * W3Schools PHP Tutorial: PHP File Open, Read, Write & Close
 * 
 * fopen() gives you more options than readfile().
 * Modes:
 * - 'r' : Read only. Starts at the beginning of the file.
 * - 'w' : Write only. Erases contents or creates new file.
 * - 'a' : Write only (Append). Preserves contents, adds to end.
 * - 'x' : Creates a new file for write only. Returns FALSE and error if file already exists.
 * - 'r+': Read/Write. Starts at beginning.
 * - 'w+': Read/Write. Erases contents or creates new file.
 * - 'a+': Read/Write. Preserves contents, adds to end.
 */

$dictFile = __DIR__ . "/sample_dictionary.txt";

// --- 1. Opening and Reading with fread() ---
echo "--- 1. Reading Entire File with fread() ---\n";
$handle = fopen($dictFile, "r") or die("Unable to open file!");
$fileContent = fread($handle, filesize($dictFile));
fclose($handle);
echo $fileContent . "\n";

// --- 2. Reading Single Line with fgets() ---
echo "--- 2. Reading First Line with fgets() ---\n";
$handle = fopen($dictFile, "r") or die("Unable to open file!");
echo "First line: " . fgets($handle);
fclose($handle);

// --- 3. Reading Line by Line until End-of-File (feof) ---
echo "\n--- 3. Reading Line-by-Line with feof() and fgets() ---\n";
$handle = fopen($dictFile, "r") or die("Unable to open file!");
$lineNum = 1;
while (!feof($handle)) {
    $line = fgets($handle);
    if ($line !== false) {
        echo "Line $lineNum: " . trim($line) . "\n";
        $lineNum++;
    }
}
fclose($handle);

// --- 4. Reading Character by Character with fgetc() ---
echo "\n--- 4. Reading First 10 Characters with fgetc() ---\n";
$handle = fopen($dictFile, "r") or die("Unable to open file!");
for ($i = 0; $i < 10 && !feof($handle); $i++) {
    echo fgetc($handle) . " ";
}
echo "\n";
fclose($handle);

// --- 5. Creating & Writing to a File with fwrite() ---
echo "\n--- 5. Writing to New File with fwrite() ---\n";
$newFile = __DIR__ . "/test_write.txt";
$writeHandle = fopen($newFile, "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($writeHandle, $txt);
$txt = "Jane Doe\n";
fwrite($writeHandle, $txt);
fclose($writeHandle);

echo "Contents of written file:\n" . file_get_contents($newFile);

// Append to the file
$appendHandle = fopen($newFile, "a") or die("Unable to open file!");
$txt = "Mark Doe (Appended)\n";
fwrite($appendHandle, $txt);
fclose($appendHandle);

echo "\nContents after append:\n" . file_get_contents($newFile);

// Clean up test file
if (file_exists($newFile)) {
    unlink($newFile);
}
