<?php
/**
 * Created by PhpStorm.
 * User: TIC2
 * Date: 9/6/2019
 * Time: 08:42
 */

namespace Clases;


class Nodo
{
    public $datos = NULL;
    public $hijosNodo = [];

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function agregarHijo(Nodo $nodo)
    {
        $this->hijosNodo[] = $nodo;
    }
}