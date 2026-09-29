<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Insert Data, Get Last ID & Insert Multiple
 * 
 * Topics:
 * - INSERT INTO syntax
 * - Getting ID of the last inserted record ($conn->insert_id in MySQLi, $pdo->lastInsertId() in PDO)
 * - Inserting multiple records using transactions
 */

echo "=== 1. Insert Single Record and Retrieve Last Insert ID (MySQLi) ===\n";
$sqlInsert = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

echo "SQL: $sqlInsert\n";
echo "Code:
if (\$conn->query(\$sqlInsert) === TRUE) {
    \$last_id = \$conn->insert_id;
    echo \"New record created successfully. Last inserted ID is: \" . \$last_id;
}\n\n";

echo "=== 2. Retrieve Last Insert ID in PDO ===\n";
echo "Code:
\$conn->exec(\$sqlInsert);
\$last_id = \$conn->lastInsertId();
echo \"Last inserted ID in PDO: \" . \$last_id;\n\n";

echo "=== 3. Insert Multiple Records with PDO Transactions ===\n";
echo "Code:
try {
    // Begin transaction for safety & high performance
    \$conn->beginTransaction();

    \$conn->exec(\"INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com')\");
    \$conn->exec(\"INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com')\");

    // Commit all statements together
    \$conn->commit();
    echo \"New records created successfully\";
} catch(PDOException \$e) {
    // Roll back if any insert failed
    \$conn->rollback();
    echo \"Error: \" . \$e->getMessage();
}\n";
