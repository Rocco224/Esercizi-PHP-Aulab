<?php

function createUser($email, $nome, $cognome) {
    return $user_array = [
        "email" => $email,
        "nome" => $nome,
        "cognome" => $cognome,
    ];
}

$somma = createUser("emailesempio@gmail.com", "Mario", "Rossi");

print_r($somma);