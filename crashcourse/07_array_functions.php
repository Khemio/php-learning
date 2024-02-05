<?php
    // $fruits = ['Apple', 'Orange', 'Mango'];

    // Get length
    // echo count($fruits);

    // Search array
    // var_dump(in_array('Apple', $fruits));

    // Add to array
    // $fruits[] = 'Pear';
    // array_push($fruits, 'Banana');
    // array_unshift($fruits, 'Kiwi');

    // print_r($fruits);
    // echo '<br>';
    
    // Remove from array
    // array_pop($fruits);
    // array_shift($fruits);
    // unset($fruits[2]);

    // print_r($fruits);
    // echo '<br>';
    
    // Split array in chunks of 2
    // $chunked_array = array_chunk($fruits, 2);
    
    // print_r($chunked_array);

    // Merge arrays
    // $arr1 = [1, 2, 3];
    // $arr2 = [4, 5, 6];
    // $arr3 = array_merge($arr1, $arr2);
    // $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);

    // Combine arrays
    // $a = ['green', 'red', 'yellow'];
    // $b = ['avacado', 'apple', 'banana'];
    // $c = array_combine($a, $b);

    // print_r($c);

    // $keys = array_keys($c);
    // print_r($keys);

    // $flipped = array_flip($c);
    // print_r($flipped);

    $numbers = range(1, 20);
    // print_r($numbers);

    // $newNumbers = array_map(function($number) {
    //     return "Number $number";
    // }, $numbers);

    // print_r($newNumbers);

    // $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry += $number) ;
    print_r($sum);
    ?>