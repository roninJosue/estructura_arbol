<?php

namespace Clases;


class ArbolPaginas implements EstructuraArbol
{
    public $root = NULL;

    public function __construct(Nodo $nodo)
    {
        $this->root = $nodo;
    }

    public function recorrerArbol($nodos, $nivel = 0, $imprimir = false, $contador = 0)
    {
        if ($nodos !== null) {
            $nodos->datos->mostrarPagina($nivel);
            foreach ($nodos->hijosNodo as $nodo){
                $this->recorrerArbol($nodo, $nivel + 1, $imprimir, $contador + 1);
            }
        }

        return;
    }

    public function crearArbol($paginas, $nivel, &$raiz)
    {
        if (isset($paginas[$nivel])) {
            foreach ($paginas[$nivel] as $key => $pagina) {
                $nueva_pagina_nodo = new Pagina($pagina->nombre, $pagina->url);
                $pagina_actual = new Nodo($nueva_pagina_nodo);

                $raiz->agregarHijo($pagina_actual);
                $this->crearArbol($paginas, $pagina->id, $pagina_actual);

            }
        }
        return;
    }
}