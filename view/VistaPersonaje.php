<?php
class VistaPersonaje {
    // mostrar la informacion del personaje//
    /**
     * @param Personaje $personaje
     */
    public function mostrarPersonaje(Personaje $personaje) {
        echo $personaje ->mostrarInformacion() . "<br>";
    }
}