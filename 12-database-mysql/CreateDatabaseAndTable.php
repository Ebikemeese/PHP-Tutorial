<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Create Database & Create Table
 * 
 * Demonstrates:
 * - Creating a Database with MySQLi and PDO
 * - Creating a Table with primary key, AUTO_INCREMENT, and timestamp constraints
 */

echo "=== 1. Create Database with MySQLi Object-Oriented ===\n";
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS myShopDB";
echo "SQL: $sqlCreateDB\n";
echo "Usage: if (\$conn->query(\$sqlCreateDB) === TRUE) { echo 'Database created successfully'; }\n\n";

echo "=== 2. Create Table with MySQLi Object-Oriented ===\n";
// SQL statement to create table
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

echo "SQL to create 'MyGuests' table:\n$sqlCreateTable\n\n";
echo "Usage:
if (\$conn->query(\$sqlCreateTable) === TRUE) {
    echo \"Table MyGuests created successfully\";
} else {
    echo \"Error creating table: \" . \$conn->error;
}\n\n";

echo "=== 3. Create Table with PDO ===\n";
echo "Usage:
try {
    \$conn = new PDO(\"mysql:host=localhost;dbname=myShopDB\", \"root\", \"\");
    \$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Executing SQL directly since no data is returned
    \$conn->exec(\$sqlCreateTable);
    echo \"Table MyGuests created successfully with PDO\";
} catch(PDOException \$e) {
    echo \"Error: \" . \$e->getMessage();
}\n";
