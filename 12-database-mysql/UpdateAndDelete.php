<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Update and Delete Data
 * 
 * - The UPDATE statement is used to modify existing records in a table.
 * - The DELETE statement is used to delete records from a table.
 * 
 * CRITICAL WARNING: Notice the WHERE clause in UPDATE and DELETE statements!
 * If you omit the WHERE clause, ALL records will be updated or deleted!
 */

echo "=== 1. Updating Data with MySQLi ===\n";
echo "Code:
\$sqlUpdate = \"UPDATE MyGuests SET lastname='Smith' WHERE id=2\";

if (\$conn->query(\$sqlUpdate) === TRUE) {
    echo \"Record updated successfully. Affected rows: \" . \$conn->affected_rows;
} else {
    echo \"Error updating record: \" . \$conn->error;
}\n\n";

echo "=== 2. Updating Data with PDO Prepared Statements ===\n";
echo "Code:
\$stmt = \$pdo->prepare(\"UPDATE MyGuests SET email = :email WHERE id = :id\");
\$stmt->execute([
    ':email' => 'newemail@example.com',
    ':id'    => 2
]);
echo \"Rows updated: \" . \$stmt->rowCount() . \"\\n\\n\";\n\n";

echo "=== 3. Deleting Data with PDO Prepared Statements ===\n";
echo "Code:
\$stmtDelete = \$pdo->prepare(\"DELETE FROM MyGuests WHERE id = :id\");
\$stmtDelete->execute([':id' => 3]);

echo \"Record deleted successfully. Rows removed: \" . \$stmtDelete->rowCount();\n";
