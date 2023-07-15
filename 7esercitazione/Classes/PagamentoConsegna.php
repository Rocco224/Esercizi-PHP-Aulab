<?php

class PagamentoConsegna implements MetodoPagamento {
    public function paga($importo)
    {
        echo "Pagherai l'importo di $importo$ alla consegna\n";
    }
}