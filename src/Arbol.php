<?php
/**
 * Created by PhpStorm.
 * User: TIC2
 * Date: 9/6/2019
 * Time: 08:47
 */

namespace Clases;


class Arbol implements EstructuraArbol
{
    public $root = NULL;

    public function __construct(Nodo $nodo)
    {
        $this->root = $nodo;
    }

    public function recorrerArbol($nodos, $nivel = 0)
    {
        if (isset($nodos)){
            echo str_repeat(".", $nivel) . $nodos->datos . "\n";
            foreach ($nodos->hijosNodo as $nodo){
                $this->recorrerArbol($nodo, $nivel + 1);
            }
            //var_dump($paginas->hijosNodo);
        }

        return;
    }

    public function crearArbol($paginas,$nivel, &$raiz)
    {
        if (isset($paginas[$nivel])) {
            foreach ($paginas[$nivel] as $key => $pagina) {
                /*$nueva_pagina_nodo = new Pagina($pagina->nombre,$pagina->url);
                $pagina_actual = new Nodo($nueva_pagina_nodo);
                $raiz->agregarHijo($pagina_actual);
                $this->crearArbol($paginas, $pagina->id, $pagina_actual);*/

                $pagina_actual = new Nodo($pagina->nombre);
                //echo str_repeat("-", ($n)) . $pagina->nombre . " " . $pagina->url . "\n";
                $raiz->agregarHijo($pagina_actual);
                $this->crearArbol($paginas, $pagina->id, $pagina_actual);

            }
        }
        return;
    }
}