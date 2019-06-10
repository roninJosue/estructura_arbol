<?php
/**
 * Created by PhpStorm.
 * User: TIC2
 * Date: 10/6/2019
 * Time: 09:10
 */

namespace Clases;


interface EstructuraArbol
{
    public function crearArbol($paginas, $nivel, &$raizArbol);
    public function recorrerArbol($nodos, $nivel);
}