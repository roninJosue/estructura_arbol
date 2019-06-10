<?php

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
        }

        return;
    }

    public function crearArbol($paginas,$nivel, &$raiz)
    {
        if (isset($paginas[$nivel])) {
            foreach ($paginas[$nivel] as $key => $pagina) {
                $pagina_actual = new Nodo($pagina->nombre);
                $raiz->agregarHijo($pagina_actual);
                $this->crearArbol($paginas, $pagina->id, $pagina_actual);

            }
        }
        return;
    }
}