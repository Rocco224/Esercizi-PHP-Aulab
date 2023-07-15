<?php

class Bonifico implements MetodoPagamento{
    public function __construct(private $iban){}

    public function paga($importo)
    {
        echo "Paga l'importo di $importo$ sull'iban $this->iban\n";
    }
}