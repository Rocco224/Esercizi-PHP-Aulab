<?php

class Ordine
{
    public $prodotti = [];
    public $prodotto = 1;
    public const IVA = 22;
    public $importoUnitarioRiga;
    public $importoIVAinclusa;
    public $sommaImportoIVAinclusa;

    public function aggiungiProdotto($prodottoOrdine)
    {
        $this->prodotti["Prodotto $this->prodotto"] = [
            "Nome prodotto" => $prodottoOrdine->nomeProdotto,
            "Quantita Ordinate" => $prodottoOrdine->quantitaOrdinate,
            "Importo Unitario" => $prodottoOrdine->importoUnitario,   
        ];
        $this->prodotto++;
    }

    public function carrello()
    {
        foreach ($this->prodotti as $prodotto) {
            $this->importoUnitarioRiga = $prodotto["Importo Unitario"] * $prodotto["Quantita Ordinate"];
            $this->importoIVAinclusa = $this->importoUnitarioRiga * (1 + self::IVA / 100);

            echo "{$prodotto['Quantita Ordinate']} - {$prodotto['Nome prodotto']} - $this->importoUnitarioRiga$ - $this->importoIVAinclusa$\n";
        }
    }

    public function totale($stampaMessaggio = false)
    {
        $this->sommaImportoIVAinclusa = 0;

        foreach ($this->prodotti as $prodotto) {
            $this->importoUnitarioRiga = $prodotto["Importo Unitario"] * $prodotto["Quantita Ordinate"];
            $this->sommaImportoIVAinclusa += $this->importoUnitarioRiga * (1 + self::IVA / 100);
        }

        if ($stampaMessaggio) {
            echo "importo totale ordine: $this->sommaImportoIVAinclusa$\n";
        } else {
            return $this->sommaImportoIVAinclusa;
        }
    }

    public function paga(MetodoPagamento $metodoPagamento)
    {
        $metodoPagamento->paga($this->sommaImportoIVAinclusa);
    }

    use StatoOrdine;

    public static function valoreIva()
    {
        echo "IVA " . self::IVA . "%\n";
    }
}