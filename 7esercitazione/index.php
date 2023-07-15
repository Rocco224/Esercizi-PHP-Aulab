<?php

include "Interfaces/MetodoPagamento.php";

include "Traits/StatoOrdine.php";

include "Classes/Ordine.php";

include "Classes/Prodotto.php";
include "Classes/ProdottoOrdine.php";

include "Classes/Bonifico.php";
include "Classes/CartaDiCredito.php";
include "Classes/PagamentoConsegna.php";

$ordine = new Ordine;

$prodotto1 = new Hack\ProdottoOrdine("Orologio", 1, 20);
$prodotto2 = new Hack\ProdottoOrdine("Jeans", 2, 50);
$prodotto3 = new Hack\ProdottoOrdine("T-shirt", 5, 25);

$prodotto4 = new Hack\Prodotto("Giacca", 80);

$ordine->aggiungiProdotto($prodotto1);
$ordine->aggiungiProdotto($prodotto2);
$ordine->aggiungiProdotto($prodotto3);

$ordine->aggiungiProdotto($prodotto4);

print_r($ordine->prodotti);

$ordine->carrello();

$valoreNumericoTotale = $ordine->totale();
print_r($valoreNumericoTotale . "\n");
$ordine->totale(true);

$carta = new CartaDiCredito("1890324894378");
$ordine->paga($carta);

$ordine->stato();

$ordine->valoreIva();