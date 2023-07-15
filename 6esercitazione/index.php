<?php

abstract class Veicolo{
    public $marca;
    public $modello;
    public $motore;

    public function __construct($marca, $modello, $motore)
    {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->motore = $motore;
    }

    public function avviaMotore(/* $motore */) 
    {
        //$motore->avvia()
        $this->motore->avvia();
    }

    public function spegniMotore()
    {
        echo "Motore spento\n";
    }

    abstract public function stampaCaratteristiche();

};

class Moto extends Veicolo {
    public function __construct($marca, $modello, $motore)
    {
        parent::__construct($marca, $modello, $motore);
    }

    public function stampaCaratteristiche()
    {
        echo "Sono una moto $this->marca $this->modello\n";
    }
}

class Auto extends Veicolo implements Movimenti_interface{
    public function __construct($marca, $modello, $motore)
    {
        parent::__construct($marca, $modello, $motore);
    }

    public function stampaCaratteristiche()
    {
        echo "Sono un auto $this->marca $this->modello\n";
    }
    
    use Movimenti;
}

class Persona {
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    use Movimenti;
}

class Motore {
    public function avvia() {
        echo "Motore avviato";
    }
}

trait Movimenti {
    public function avanti() {
        echo "Mi sto muovendo in avanti\n";
    }

    public function indietro() {
        echo "Mi sto muovendo indietro\n";
    }
}

interface Movimenti_interface {
    public function avanti();

    public function indietro();
}
$motore1 = new Motore;

$moto1 = new Moto("Ducati", "Panigale v2", $motore1);
$moto2 = new Moto("Yamaha", "YZF R1", "998cc");
$moto3 = new Moto("Kawasaki", "Ninja", "1000cc");

$auto1 = new Auto("Alfa Romeo", "Giulia", "2100cc");
$auto2 = new Auto("wolksvagen", "Golf", "2000");
$auto3 = new Auto("Ford", "Focus", "2300cc");



$moto1->avviaMotore(/* $motore1 */);
$moto1->spegniMotore();

$moto1->stampaCaratteristiche();
$auto1->stampaCaratteristiche();

$auto2->avanti();
$auto2->indietro();

$persona1 = new Persona("Giuliano");
$persona1->avanti();
$persona1->indietro();