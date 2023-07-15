<?php

$testo = "Testo iniziale";

function mod_text(&$text) {
    return $text = "Testo modificato";
};

$testo_mod = mod_text($testo);

echo $testo_mod;