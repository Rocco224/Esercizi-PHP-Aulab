<?php
function search($corsi, $corso_cercato) {

    $found = false; // false se l'elemento non viene trovato, altrimenti true

    foreach($corsi as $index => $corso) {

        if($corso == $corso_cercato) {
            
            echo "Trovato alla posizione: $index\n";
            $found = true;
            break;
        }
    }

    if(! $found) {
        echo "Elemento non trovato!";
    }
    
}

$corsi = ["PHP", "Laravel", "MySQL", "JS", "CSS"];

search($corsi, "MtSQL");