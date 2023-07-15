<?php

$example = "elemento1 ;eleme  nto2; element  o3; elem ento4";

function string_to_array($str) {
    $new_str = str_replace(" ", "", $str); 

    return $array = explode(";", $new_str);
}

print_r(string_to_array($example));