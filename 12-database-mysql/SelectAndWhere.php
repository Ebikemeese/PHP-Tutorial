<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Select Data & WHERE Clause
 * 
 * Topics:
 * - SELECT column1, column2 FROM table
 * - The WHERE clause used to filter records
 * - Fetching associative arrays (fetch_assoc in MySQLi, FETCH_ASSOC in PDO)
 */

echo "=== 1. Select Data with MySQLi Object-Oriented ===\n";
echo "Code:
\$sql = \"SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'\";
\$result = \$conn->query(\$sql);

if (\$result->num_rows > 0) {
    // Output data of each row
    while(\$row = \$result->fetch_assoc()) {
        echo \"id: \" . \$row[\"id\"]. \" - Name: \" . \$row[\"firstname\"]. \" \" . \$row[\"lastname\"]. \"\\n\";
    }
} else {
    echo \"0 results found.\";
}\n\n";

echo "=== 2. Select Data with PDO Prepared Statement ===\n";
echo "Code:
\$stmt = \$pdo->prepare(\"SELECT id, firstname, lastname, email FROM MyGuests WHERE lastname = :lname\");
\$stmt->execute([':lname' => 'Doe']);

// Fetch all matching rows as associative arrays
\$rows = \$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach (\$rows as \$row) {
    echo \"User: \" . \$row['firstname'] . \" \" . \$row['lastname'] . \" (\" . \$row['email'] . \")\\n\";
}\n";
