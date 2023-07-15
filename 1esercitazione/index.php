<?php

// ESERCIZIO 1

$numeroIntero = 10;
$numeroDecimale = 10.5;
$stringa = "Ciao mondo!";
$booleano = true;

var_dump($stringa);

// ESERCIZIO 2

$total = 24;
$test1 = 'Il totale degli importi delle fatture emesse questo mese è di ' . $total . ' euro';
$test2 = "Il totale degli importi delle fatture emesse questo mese è di $total euro";

echo $test2;

// ESERCIZIO 3

$corsi = ['PHP', 'Laravel', 'Javascript', 'CSS', 'HTML'];

// ESERCIZIO 4 - 5

$auto = [
    'marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettrico',
    'colore' => 'rosso',
];

$output = 'L\'auto scelta è una ' . $auto['marca'] . ' ' . $auto['modello'];

echo $output;

$auto['accessori'] = ['cambio automatico', 'navigatore satellitare'];

print_r($auto);

// ESERCIZIO 6

$x = 10;
$y = 20;
$z = "20";
$w = 10;

//var_dump($x < $y); TRUE
//var_dump($x <= $w); TRUE
//var_dump($y == $z); TRUE
//var_dump($y === $z); FALSE
//var_dump($y !== $z); TRUE
//var_dump($y != $z); FALSE

// ESERCIZIO 7

$x = 10;
$y = 20;
$z = "20";
$w = "Sono una stringa";

//var_dump($x + $y); int(30)
//var_dump($x + $z); int(30)
//var_dump($x + $w); fatal error
//var_dump($x . $w); string(18) "10Sono una stringa"
//var_dump($x * $y); int(200)
//var_dump($x / $y); float(0.5)
//var_dump($x % $y); int(10)
//var_dump($y % $x); int(0)