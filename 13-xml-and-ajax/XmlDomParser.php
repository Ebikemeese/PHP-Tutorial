<?php
/**
 * W3Schools PHP Tutorial: PHP XML DOM Parser
 * 
 * The built-in DOM parser represents an XML document as a tree structure in memory.
 * - DOMDocument class
 * - loadXML(): Loads XML from a string
 * - getElementsByTagName(): Selects elements by tag name
 * - childNodes, nodeValue, nodeName
 */

$xmlDoc = new DOMDocument();

$xmlString = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<employees>
    <employee>
        <id>101</id>
        <name>Alice Johnson</name>
        <department>Engineering</department>
    </employee>
    <employee>
        <id>102</id>
        <name>Bob Williams</name>
        <department>Design</department>
    </employee>
</employees>
XML;

// Load XML into DOM tree
$xmlDoc->loadXML($xmlString);

// Print full formatted XML representation
echo "--- Formatted XML using saveXML() ---\n";
echo $xmlDoc->saveXML() . "\n";

// Loop through elements
echo "--- Extracting Employees with DOMDocument ---\n";
$employees = $xmlDoc->getElementsByTagName("employee");

foreach ($employees as $emp) {
    $id = $emp->getElementsByTagName("id")->item(0)->nodeValue;
    $name = $emp->getElementsByTagName("name")->item(0)->nodeValue;
    $dept = $emp->getElementsByTagName("department")->item(0)->nodeValue;

    echo "Employee ID: $id | Name: $name | Department: $dept\n";
}
