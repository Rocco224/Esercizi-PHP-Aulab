<?php

// ESERCIZIO 8

$temperature = 14;

if ($temperature < 15) {
    echo "Fa freddo!";
} elseif ($temperature >25) {
    echo "Fa molto caldo!";
} else {
    echo "Fa caldo!";
}

// ESERCIZIO 9 

for ($i=1; $i <= 10; $i++) { 
    var_dump($i);
};

$a = 1;
while ($a <= 10) {
    var_dump($a);
    $a++;
};

$a = 1;
do {    
    var_dump($a);
    $a++;    
} while ($a <= 10);

// ESERCIZIO 10

for ($i=2; $i <= 10; $i++) { 
    if ($i % 2 == 0) {
        var_dump($i);
    }
}

// ESERCIZIO 11

$corsi = ['PHP', 'Laravel', 'Javascript', 'CSS', 'HTML'];

foreach ($corsi as $corso) {
    echo $corso . "\n";
};

// ESERCIZIO 12

$auto = [
    'marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettrico',
    'colore' => 'rosso',
];

$auto['accessori'] = [1 => 'cambio automatico', 2 => 'navigatore satellitare'];

foreach ($auto as $key => $caratteristica) {
    echo $key . " => " . $caratteristica . "\n";

    if ($key == "accessori") {
        foreach ($auto["accessori"] as $key => $caratteristica) {
            echo "accessorio " . $key . " => " . $caratteristica . "\n";
        }
    }
}
