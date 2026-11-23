<?php
require_once __DIR__ . '/Personaje.php';

class Aqua extends Personaje {
    private $mazo;

    public function __construct($ataque, $defensa, $vida, $nombre, $tipo, $arma) {
        parent::__construct(24, 15, 115, $nombre, "agua", "mazo");
        $this->mazo = $arma;
    }

    public function getMazo() {
        return $this->mazo;
    }

    public function setMazo(){
        return $this->mazo;
    }

        public function mostrarInformacion(){
            return parent::mostrarInformacion() . " | Arma: {$this->mazo}";
        
    }
}