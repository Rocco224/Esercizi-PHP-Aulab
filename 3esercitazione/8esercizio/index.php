<?php

function string_analisis($str) {
    return $output = [
        "testo" => $str,
        "numero_caratteri" => strlen($str),
        "maiuscolo" => strtoupper($str),
        "minuscolo" => strtolower($str),
    ];
};

print_r(string_analisis("ciao"));