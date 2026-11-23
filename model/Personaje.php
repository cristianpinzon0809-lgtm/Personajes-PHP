<?php

class Personaje {
    private $ataque;
    private $defensa;
    private $vida;
    private $nombre;
    private $tipo;
    private $arma;

    public function __construct($ataque, $defensa, $vida, $nombre, $tipo, $arma) {
        $this->ataque = $ataque;
        $this->defensa = $defensa;
        $this->vida = $vida;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->arma = $arma;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getDefensa() {
        return $this->defensa;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getArma() {
        return $this->arma;
    }


    public function setAtaque($ataque) {
        $this->ataque = $ataque;
    }

    public function setDefensa($defensa) {
        $this->defensa = $defensa;
    }

    public function setVida($vida) {
        $this->vida = $vida;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setArma($arma) {
        $this->arma = $arma;
    }
    public function mostrarInformacion(){
        return "El personaje: {$this->nombre} | Tipo: {$this->tipo} | Ataque:{$this->ataque} | Defensa:{$this->defensa} | Vida:{$this->vida}";
    }
}