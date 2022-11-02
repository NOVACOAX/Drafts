<?php


/**
 * It takes a string, trims it, strips slashes, and converts special characters to HTML entities
 * param data The data to be validated.
 * return the data that has been trimmed, stripped of slashes, and converted to html special
 * characters.
 */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>