<?php

function infinite_sum(...$nums) {
    $total = 0;

    foreach($nums as $num) {
        $total += $num;
    };

    return $total;
};

$sum = infinite_sum(3, 7);

echo $sum;