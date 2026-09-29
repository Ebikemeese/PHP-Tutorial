<?php
/**
 * W3Schools PHP Tutorial: PHP Switch Statement
 * 
 * The switch statement is used to perform different actions based on different conditions.
 * It selects one of many code blocks to be executed.
 */

// --- 1. Basic Switch Statement ---
$favColor = "red";

switch ($favColor) {
    case "red":
        echo "Your favorite color is red!\n";
        break;
    case "blue":
        echo "Your favorite color is blue!\n";
        break;
    case "green":
        echo "Your favorite color is green!\n";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!\n";
}

// --- 2. Switch Statement without Break (Fallthrough) ---
$grade = "B";

switch ($grade) {
    case "A":
    case "B":
        echo "Great job! Above average performance.\n";
        break;
    case "C":
        echo "Average performance.\n";
        break;
    case "D":
    case "F":
        echo "Needs tutoring.\n";
        break;
    default:
        echo "Invalid grade.\n";
}

// --- 3. Switch with Integer values ---
$dayOfWeek = 3;

switch ($dayOfWeek) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    default:
        echo "Invalid day of week\n";
}
