<?php
function arrayManipulation($numbers) {
    $oddNumber = [];

    foreach ($numbers as $number) {
        if ($number % 2 == 1) {
            $oddNumber[] = $number;
        }
    }

    print_r($oddNumber);
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

arrayManipulation($numbers);

