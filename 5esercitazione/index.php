<?php

//final
class Cliente {
    public $nome;
    public $citta;
    private $fatturato_annuo;
    public $nome_responsabile;
    public static $counter = 0;

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile)
    {
        $this->nome = $nome;
        $this->citta = $citta;
        $this->fatturato_annuo = $fatturato_annuo;
        $this->nome_responsabile = $nome_responsabile;
        self::$counter++;
    }

    //final 
    public function Fatturato() {
        echo $this->fatturato_annuo;
    }

    public static function numero_clienti() {
        echo "Il numero totale dei clienti è: " . self::$counter;
    }
};

class Negozio extends Cliente {
    public $telefono;
    public $email;
    const TIPOLOGIA = "Negozio";

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile, $telefono, $email)
    {
        parent::__construct($nome, $citta, $fatturato_annuo, $nome_responsabile);

        $this->telefono = $telefono;
        $this->email = $email;
    }
};

class Grande_distribuzione extends Cliente {
    public $sedi_negozi = [];
    public $nome_sede;
    public $somma_fatturati = 0;
    const TIPOLOGIA = "Grande Distribuzione";

    public function __construct($nome, $citta, $fatturato_annuo, $nome_responsabile)
    {
        parent::__construct($nome, $citta, $fatturato_annuo, $nome_responsabile);
    }

    public function aggiungi_sede($nome_sede, $citta_sede, $email_sede, $telefono_sede, $fatturato_sede) {
        $this->nome_sede = $nome_sede;
        $this->sedi_negozi[$this->nome_sede] =[
            "Citta" => $citta_sede,
            "Email" => $email_sede,
            "Telefono" => $telefono_sede,
            "Fatturato" => $fatturato_sede,
        ];
    }

    /*
    public function Fatturato() {
        echo "Dato attualmente non disponibile";
    }
    */
    public function fatturato_tot() {
        foreach($this->sedi_negozi as $sede) {
            $this->somma_fatturati += $sede["Fatturato"];
        };
        echo "Il fatturato totale di $this->nome è $this->somma_fatturati\n";
    }

    public function rimuovi_sede($sede_da_rimuovere) {
        foreach ($this->sedi_negozi as $nome_sede => $sede) {
            if ($sede_da_rimuovere == $nome_sede) {
                unset($this->sedi_negozi[$nome_sede]);
                echo "Deleted\n";
                return;
            }   
        }
        echo "Not found\n";
    }

};

$negozio = new Negozio("Telefonini per tutti", "Vicenza", "30000", "Luca", "0966966123", "erfgwergrg@example.com");
$negozio2 = new Negozio("Telefonia", "Salerno", "42000", "Silvano", "0960326123", "asdsddssd@example.com");

$grande_distribuzione = new Grande_distribuzione("Lironics", "Roma", "250000", "Paolo");

$grande_distribuzione->aggiungi_sede("Sede 1", "Delianuova", "kaskaskm@example.com", "00091878272",250000);
$grande_distribuzione->aggiungi_sede("Sede 2", "Napoli", "mkdfsasef@example.com", "04583878272", 50000);
$grande_distribuzione->aggiungi_sede("Sede 3", "Palermo", "opisud@example.com", "00327898272", 100000);
$grande_distribuzione->aggiungi_sede("Sede 4", "Milano", "wfdeawer@example.com", "01234878272", 40000);
$grande_distribuzione->aggiungi_sede("Sede 5", "Torino", "oopeue@example.com", "00963527272", 30000);

print_r($grande_distribuzione->sedi_negozi);

//$negozio->Fatturato();
//$grande_distribuzione->Fatturato();

$grande_distribuzione->fatturato_tot();

$grande_distribuzione->rimuovi_sede("Sede 5");

print_r($grande_distribuzione->sedi_negozi);

Cliente::numero_clienti();