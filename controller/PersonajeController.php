<?php
require_once __DIR__ . '/../model/Personaje.php';
require_once __DIR__ . '/../model/Apolo.php';
require_once __DIR__ . '/../model/Aqua.php';
require_once __DIR__ . '/../model/Terra.php';

require_once __DIR__ . '/../view/VistaPersonaje.php';

class PersonajeController
{
    private $vista;

    /**
     * @param VistaPersonaje $vista
     */
    public function __construct(VistaPersonaje $vista)
    {
        $this->vista = $vista;
    }




    public function demostrar()
    {
        $personajes = array(
            new Personaje(32, 10, 100, "PorsonajeName", "fuego", "espada"),
            new Personaje(24, 15, 115, "PorsonajeName", "agua", "mazo"),
            new Personaje(20, 20, 130, "PorsonajeName", "planta", "escudo"),
        );

        foreach ($personajes as $personaje) {
            $this->vista->mostrarPersonaje($personaje);
        }
    }
}
