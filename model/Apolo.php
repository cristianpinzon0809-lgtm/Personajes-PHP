<?php

require_once __DIR__ . '/Personaje.php';

class Apolo extends Personaje {
    private $espada;

    public function __construct($ataque, $defensa, $vida, $nombre, $tipo, $arma) {
        parent::__construct(32, 10, 100, $nombre, "fuego", "espada");
        $this->espada = $arma;
    }

    public function getEspada() {
        return $this->espada;
    }

    public function setEspada() {
        return $this->espada;
    }

    public function mostrarInformacion(){
        return parent::mostrarInformacion() . " | Arma: {$this->espada}";
    }
}