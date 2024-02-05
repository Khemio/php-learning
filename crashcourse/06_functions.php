<?php
    $y = 12;

    function registerUser($email) {
        global $y;
        echo $email . ' registred ' . $y;
    }

    // registerUser('jane@yahoo.com');

    function sum($n1 = 5, $n2 = 3) {
        return $n1 + $n2;
    }

    // $result = sum(10, 5);

    // echo $result . '<br>' . '<hr>' . sum();

    $subract = function($n1, $n2) {
        return $n1 - $n2;
    };

    // echo $subract(10, 5);

    $multiply = fn($n1, $n2) => $n1 * $n2;

    echo $multiply(3, 7);
        
?>