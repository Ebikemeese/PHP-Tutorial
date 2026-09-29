<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Prepared Statements
 * 
 * A prepared statement is a feature used to execute the same (or similar)
 * SQL statements repeatedly with high efficiency and prevents SQL INJECTION attacks!
 * 
 * Benefits:
 * 1. Security: Parameter values are sent separately using a different protocol, preventing injection.
 * 2. Performance: Query plan is prepared and cached once by the database engine.
 */

echo "=== 1. MySQLi Prepared Statements (Positional '?' and bind_param) ===\n";
echo "Type Specifiers for bind_param:
- i: integer
- d: double
- s: string
- b: BLOB

Example Code:
// 1. Prepare statement template
\$stmt = \$conn->prepare(\"INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)\");

// 2. Bind parameters ('sss' means three string arguments)
\$stmt->bind_param(\"sss\", \$firstname, \$lastname, \$email);

// 3. Set parameters and execute
\$firstname = \"John\";
\$lastname  = \"Doe\";
\$email     = \"john@example.com\";
\$stmt->execute();

\$firstname = \"Mary\";
\$lastname  = \"Moe\";
\$email     = \"mary@example.com\";
\$stmt->execute();

\$stmt->close();
echo \"Records inserted securely with MySQLi prepared statements.\";\n\n";

echo "=== 2. PDO Prepared Statements (Named Placeholders ':name') ===\n";
echo "Example Code:
// 1. Prepare statement with named parameters
\$stmt = \$pdo->prepare(\"INSERT INTO MyGuests (firstname, lastname, email) 
                       VALUES (:firstname, :lastname, :email)\");

// 2. Bind and execute with an associative array
\$stmt->execute([
    ':firstname' => 'Julie',
    ':lastname'  => 'Dooley',
    ':email'     => 'julie@example.com'
]);

echo \"Record inserted securely with PDO named prepared statement.\";\n";
