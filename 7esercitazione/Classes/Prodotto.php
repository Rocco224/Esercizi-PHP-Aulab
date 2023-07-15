<?php

namespace Hack;

class Prodotto
{    
    public $nomeProdotto;
    public $importoUnitario;
    public $quantitaOrdinate = 1;

    public function __construct($nomeProdotto, $importoUnitario)
    {
        $this->nomeProdotto = $nomeProdotto;
        $this->importoUnitario = $importoUnitario;
    }
}