<?php 
// $age = 17;

// if ($age >= 18) {
//     echo ('You can drink');
// } else {
//     echo ('You are too young');
// }

// $t = date('H');

// if ($t < 12) {
//     echo 'Good Morning';
// } elseif ($t < 18) {
//     echo 'Good Day';
// } elseif ($t < 22) {
//     echo 'Good Evening';
// } else {
//     echo 'Good Night';
// }

$posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No posts';
// }

// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = 'yellow';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    default:
        echo 'Your favorite color is not red, green or blue';
}
?>