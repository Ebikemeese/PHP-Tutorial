<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Connect
 * 
 * PHP can connect to and manipulate databases.
 * MySQL is the most popular database system used with PHP.
 * 
 * PHP provides two main extensions for MySQL:
 * 1. MySQLi extension ("i" stands for improved) - supports Object-Oriented and Procedural
 * 2. PDO (PHP Data Objects) - works on 12 different database systems with consistent API
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

echo "=== 1. MySQLi Object-Oriented Connection ===\n";
/*
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully (MySQLi Object-Oriented)\n";
$conn->close();
*/
echo "// Syntax: \$conn = new mysqli(\$servername, \$username, \$password);\n";
echo "// Check: if (\$conn->connect_error) die(\$conn->connect_error);\n\n";

echo "=== 2. MySQLi Procedural Connection ===\n";
/*
// Create connection
$connProc = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connProc) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully (MySQLi Procedural)\n";
mysqli_close($connProc);
*/
echo "// Syntax: \$conn = mysqli_connect(\$servername, \$username, \$password);\n";
echo "// Check: if (!\$conn) die(mysqli_connect_error());\n\n";

echo "=== 3. PDO (PHP Data Objects) Connection ===\n";
/*
try {
    $connPDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully (PDO)\n";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Closing connection
$connPDO = null;
*/
echo "// Syntax: \$conn = new PDO(\"mysql:host=\$servername;dbname=\$dbname\", \$username, \$password);\n";
echo "// \$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n";
echo "// Closing: \$conn = null;\n\n";

echo "--- Summary Comparison ---\n";
echo "PDO is recommended for projects that might switch database vendors.\n";
echo "MySQLi is specific to MySQL/MariaDB and supports both OO and Procedural styles.\n";
