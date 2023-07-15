<?php

namespace Hack;

class ProdottoOrdine extends Prodotto
{
    public function __construct($nomeProdotto, $quantitaOrdinate, $importoUnitario)
    {
        parent::__construct($nomeProdotto, $importoUnitario);

        $this->quantitaOrdinate = $quantitaOrdinate;
    }
}
