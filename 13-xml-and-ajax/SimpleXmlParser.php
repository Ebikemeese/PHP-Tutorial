<?php
/**
 * W3Schools PHP Tutorial: PHP XML - SimpleXML Parser
 * 
 * SimpleXML is a PHP extension that allows us to easily manipulate and get XML data.
 * - simplexml_load_string(): Reads XML data from a string.
 * - simplexml_load_file(): Reads XML data from a file.
 * - Accessing node values via object properties (->node).
 * - Accessing XML attributes via array syntax (['attribute']).
 */

$xmlString = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<bookstore>
    <book category="CHILDREN">
        <title lang="en">Harry Potter</title>
        <author>J K. Rowling</author>
        <year>2005</year>
        <price>29.99</price>
    </book>
    <book category="WEB">
        <title lang="en">Learning PHP &amp; MySQL</title>
        <author>Robin Nixon</author>
        <year>2021</year>
        <price>39.95</price>
    </book>
</bookstore>
XML;

// --- 1. Loading XML from String ---
$xml = simplexml_load_string($xmlString) or die("Error: Cannot create object");

// --- 2. Accessing Individual Elements ---
echo "First book title:  " . $xml->book[0]->title . "\n";
echo "First book author: " . $xml->book[0]->author . "\n";
echo "First book category attribute: " . $xml->book[0]['category'] . "\n\n";

// --- 3. Looping Through XML Nodes ---
echo "--- Bookstore Inventory ---\n";
foreach ($xml->children() as $book) {
    echo "Title:  " . $book->title . " (Lang: " . $book->title['lang'] . ")\n";
    echo "Author: " . $book->author . "\n";
    echo "Price:  $" . $book->price . "\n";
    echo "Category: " . $book['category'] . "\n";
    echo "---------------------------\n";
}
