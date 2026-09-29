<?php
/**
 * W3Schools PHP Tutorial: PHP XML Expat Parser
 * 
 * The Expat parser is an event-based parser.
 * It does not load the entire XML document into memory; instead, it reads the document
 * sequentially and triggers events (callbacks) for start tags, end tags, and data.
 * Great for parsing huge XML documents efficiently!
 */

// Initialize the XML parser
$parser = xml_parser_create();

// Function to use at the start of an element
function startElement($parser, $element_name, $element_attrs) {
    switch ($element_name) {
        case "NOTE":
            echo "-- Note Start --\n";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
            break;
    }
}

// Function to use at the end of an element
function stopElement($parser, $element_name) {
    if ($element_name === "NOTE") {
        echo "-- Note End --\n";
    }
}

// Function to use when finding character data
function charData($parser, $data) {
    $cleanData = trim($data);
    if (!empty($cleanData)) {
        echo $cleanData . "\n";
    }
}

// Specify element handler
xml_set_element_handler($parser, "startElement", "stopElement");

// Specify data handler
xml_set_character_data_handler($parser, "charData");

// Sample XML content
$xmlData = "<note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Don't forget me this weekend!</body>
</note>";

// Parse XML string
xml_parse($parser, $xmlData, true) or die(sprintf(
    "XML error: %s at line %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)
));

// Free the XML parser memory
xml_parser_free($parser);
