<?php

$blacklist = [
        '192.168.0.101',
        '192.168.0.121',
        '192.168.0.103',
        '192.168.0.134',
        '192.168.0.125',
    ];

function check_blacklist($blacklist, $search) {
    foreach ($blacklist as $IPaddress) {
        if ($IPaddress === $search) {
            echo "l'indirizzo e' presente nella lista";
            die();
        };
        echo "\n!!questo non si deve leggere!!";
    };
};

check_blacklist($blacklist, '192.168.0.101');