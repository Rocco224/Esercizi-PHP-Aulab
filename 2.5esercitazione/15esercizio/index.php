<?php

$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = $i + 1;
}

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . " = " . "Pari" . "\n";
    } else {
        echo $number . " = " . "Dispari" . "\n";
    }
}
