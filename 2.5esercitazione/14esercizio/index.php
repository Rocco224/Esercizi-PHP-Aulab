<?php

$corsi = [
    "HTML", 
    "CSS", 
    "Javascript", 
    "PHP", 
    "Laravel"
];

$search = "PHP";

foreach ($corsi as $index => $corso) {
    if ($corso == $search) {
        echo "Trovato! Nella posizione $index";
        break; // ferma il ciclo un volta trovato
        continue; // non esegue quello che c'e' dopo e passa all'elemento successivo
    }
}