<?php
$importi = [1000, 2500, 1955.5, 560, 700];
$total = 0;

foreach ($importi as $importo) {
    $total += $importo;
}

$test1 = 'Il totale degli importi delle fatture emesse questo mese è di ' . $total . ' euro';
$test2 = "Il totale degli importi delle fatture emesse questo mese è di $total euro";

echo $test2;