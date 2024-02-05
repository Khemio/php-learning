<?php
// for ($x = 0; $x <= 10; $x++) {
//     echo 'Number ' . $x . '<br>';
// }

// $x = 0;

// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x >= 2 && $x < 10);

// $posts = ['First Post', 'Second Post', 'Third Post'];

// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x] . '<br>';
// }

// foreach ($posts as $post) {
//     echo $post . '<br>';
// }

// foreach ($posts as $index => $post) {
//     echo $index + 1 . ' - ' . $post . '<br>';
// }

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

foreach($people as $index => $person) {
    echo 'Person #' . $index + 1 . ' : <br>';

    foreach($person as $key => $value) {
        echo '- ' . $key . ': ' . $value . '<br>';
    }

    echo '<hr>';
}
?>