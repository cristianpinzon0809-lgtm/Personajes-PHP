<?php

require_once __DIR__ . "/controller/PersonajeController.php";
require_once __DIR__ . "/view/VistaPersonaje.php";

$vista = new VistaPersonaje();
$controller = new PersonajeController($vista);

$controller->demostrar();