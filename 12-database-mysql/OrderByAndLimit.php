<?php
/**
 * W3Schools PHP Tutorial: PHP MySQL Order By & Limit Data (Pagination)
 * 
 * - ORDER BY: Sorts the result set in ascending (ASC) or descending (DESC) order.
 * - LIMIT: Limits the number of records returned from the query.
 * - OFFSET: Specifies the offset of the first row to return (crucial for pagination).
 */

echo "=== 1. Sorting Results with ORDER BY ===\n";
echo "SQL Ascending:
SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname ASC;

SQL Descending:
SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname DESC;\n\n";

echo "=== 2. Limiting Results with LIMIT (MySQLi) ===\n";
echo "SQL to get top 10 recent records:
SELECT id, firstname, lastname FROM MyGuests ORDER BY id DESC LIMIT 10;\n\n";

echo "=== 3. Implementing Pagination with LIMIT and OFFSET ===\n";
echo "Explanation:
- Page 1: LIMIT 10 OFFSET 0   (Items 1 - 10)
- Page 2: LIMIT 10 OFFSET 10  (Items 11 - 20)
- Page 3: LIMIT 10 OFFSET 20  (Items 21 - 30)

PDO Pagination Example:
\$page = 2;
\$recordsPerPage = 10;
\$offset = (\$page - 1) * \$recordsPerPage;

\$stmt = \$pdo->prepare(\"SELECT * FROM MyGuests ORDER BY id LIMIT :limit OFFSET :offset\");
\$stmt->bindValue(':limit', \$recordsPerPage, PDO::PARAM_INT);
\$stmt->bindValue(':offset', \$offset, PDO::PARAM_INT);
\$stmt->execute();
\$results = \$stmt->fetchAll(PDO::FETCH_ASSOC);\n";
