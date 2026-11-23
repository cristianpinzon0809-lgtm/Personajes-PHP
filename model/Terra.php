<?php
require_once __DIR__ . '/Personaje.php';

class Terra extends Personaje { 
    private $escudo;

    public function __construct($ataque, $defensa, $vida, $nombre, $tipo, $arma) {
        parent::__construct(20, 20, 130, $nombre, "planta", "escudo");
        $this->escudo = $arma;
    }

    public function getEscudo() {
        return $this ->escudo;
    }

    public function setEscudo() {
        return $this->escudo;
    }

    public function mostrarInformacion(){
        return parent::mostrarInformacion() . " | Arma: {$this->escudo}";
    }
}