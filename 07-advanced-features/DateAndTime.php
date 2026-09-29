<?php
/**
 * W3Schools PHP Tutorial: PHP Date and Time
 * 
 * The PHP date() function formats a timestamp to a more readable date and time.
 * Syntax: date(format, timestamp)
 * Common format characters:
 * - d: Day of the month (01 to 31)
 * - m: Month (01 to 12)
 * - Y: Year (four digits)
 * - l: Day of the week
 * - H: 24-hour format (00 to 23), h: 12-hour format (01 to 12)
 * - i: Minutes (00 to 59), s: Seconds (00 to 59), a: am/pm
 */

// --- 1. Setting the Timezone ---
date_default_timezone_set("UTC");
echo "Active timezone: " . date_default_timezone_get() . "\n";

// --- 2. Formatting Current Date ---
echo "Today is " . date("Y/m/d") . "\n";
echo "Today is " . date("Y.m.d") . "\n";
echo "Today is " . date("Y-m-d") . "\n";
echo "Today is " . date("l, F j, Y") . "\n";

// --- 3. Formatting Current Time ---
echo "The current time is " . date("h:i:sa") . "\n";
echo "24-hour time is " . date("H:i:s") . "\n";

// --- 4. Creating a Timestamp with mktime() ---
// Syntax: mktime(hour, minute, second, month, day, year)
$customDate = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date: " . date("Y-m-d h:i:sa", $customDate) . "\n";

// --- 5. Creating a Timestamp with strtotime() ---
// Converts a human-readable string into a Unix timestamp
$d1 = strtotime("10:30pm April 15 2026");
echo "From string: " . date("Y-m-d h:i:sa", $d1) . "\n";

$d2 = strtotime("tomorrow");
echo "Tomorrow: " . date("Y-m-d", $d2) . "\n";

$d3 = strtotime("next Saturday");
echo "Next Saturday: " . date("Y-m-d", $d3) . "\n";

$d4 = strtotime("+3 Months");
echo "In 3 months: " . date("Y-m-d", $d4) . "\n";

// --- 6. Object-Oriented DateTime Class ---
$now = new DateTime();
echo "DateTime OOP format: " . $now->format("Y-m-d H:i:s") . "\n";

$interval = new DateInterval("P10D"); // 10 days
$now->add($interval);
echo "10 days later: " . $now->format("Y-m-d") . "\n";
