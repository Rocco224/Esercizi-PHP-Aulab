<?php 

function print_text($str = "") {
    if ($str === "") {
        echo "Attenzione: non hai indicato la stringa da stampare";
    } else {
        echo $str;
    }
}

print_text("Ciao Mondo!");