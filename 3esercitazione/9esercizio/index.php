<?php

$password = "1234";

function check_password_lenght($pwd) {
    $pwd_length = strlen($pwd);

    var_dump($pwd_length);

    if($pwd_length <= 8  &&  $pwd_length >= 18) {
        return true;
    } else {
        return false;
    };
};

var_dump(check_password_lenght($password));