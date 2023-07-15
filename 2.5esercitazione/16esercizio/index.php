<?php

$corsi = [];

if (!$corsi) {
    echo "Nessun corso disponibile";
} else {
    foreach ($corsi as $corso) {
    echo $corso . "\n";
};
};