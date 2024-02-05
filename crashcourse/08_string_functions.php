<?php
    $string = 'Hello World';

    // Get length of a string
    echo strlen($string);

    // Find the first occurance of a substring in a string
    echo strpos($string, 'o');

    // Find the last occurance of a substring in a string
    echo strrpos($string, 'o');

    // Reverse a string
    echo strrev($string);

    // Convert all characters to lowercase
    echo strtolower($string);

    // Convert all characters to uppercase
    echo strtoupper($string);

    // Uppercase first character of each word
    echo ucwords($string);

    // String replace
    echo str_replace('World', 'Everyone', $string);

    // Return portin of a string specified by the offset and length
    echo substr($string, 0, 5);
    echo substr($string, 5);

    // Starts with
    if (str_starts_with($string, 'Hello')) echo 'YES';

    // End with
    if (str_ends_with($string, 'ld')) echo 'YES';

    $string2 = '<script>alert(1)</script>';
    echo htmlspecialchars($string2);

    printf('%s likes to %s', 'Andrei', 'code');
    printf('1+1=%d', 1+1);
    printf('1+1=%f', 1+1);
?>