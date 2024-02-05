<?php
// Simple Arrays
$numbers = [1, 22, 35, 69];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[0];

// Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name'=> 'Andrei',
    'last_name'=> 'Zaikin',
    'email'=> 'inerizal@gmail.com',
];

// echo $person['first_name'];

$people = [
    [
        'first_name'=> 'Andrei',
        'last_name'=> 'Zaikin',
        'email'=> 'inerizal@gmail.com',
    ],
    [
        'first_name'=> 'John',
        'last_name'=> 'Doe',
        'email'=> 'john_doe@hotmail.com',
    ],
    [
        'first_name'=> 'Jane',
        'last_name'=> 'Doe',
        'email'=> 'jane@yahoo.com',
    ]
];

// echo $people[1]['email'];

var_dump(json_encode($people));
?>