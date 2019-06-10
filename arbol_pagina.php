<?php

require "vendor\autoload.php";
use Clases\Nodo;
use Clases\ArbolPaginas;
use Clases\Pagina;

/*for ($i = 1; $i < 11; $i++) {
    echo "$i\n";
    sleep(1);
    echo "\033[1A";
}

exit;*/

$paginaAcerca = new stdClass();
$paginaAcerca->id = 1;
$paginaAcerca->nombre = "Acerda de";
$paginaAcerca->url = "";
$paginaAcerca->id_padre = 0;

$paginaContacto = new stdClass();
$paginaContacto->id = 2;
$paginaContacto->nombre = "Contacto";
$paginaContacto->url = "contacto/";
$paginaContacto->id_padre = 0;

$paginaHistoria = new stdClass();
$paginaHistoria->id = 3;
$paginaHistoria->nombre = "Historia";
$paginaHistoria->url = "";
$paginaHistoria->id_padre = 0;

$paginaHistoria1 = new stdClass();
$paginaHistoria1->id = 4;
$paginaHistoria1->nombre = "Historia 1";
$paginaHistoria1->url = "historia1/";
$paginaHistoria1->id_padre = 3;

$paginaHistoria2 = new stdClass();
$paginaHistoria2->id = 5;
$paginaHistoria2->nombre = "Historia 2";
$paginaHistoria2->url = "";
$paginaHistoria2->id_padre = 3;

$paginaHistoria21 = new stdClass();
$paginaHistoria21->id = 6;
$paginaHistoria21->nombre = "Historia 2.1";
$paginaHistoria21->url = "";
$paginaHistoria21->id_padre = 5;

$paginaHistoria22 = new stdClass();
$paginaHistoria22->id = 7;
$paginaHistoria22->nombre = "Historia 2.2";
$paginaHistoria22->url = "";
$paginaHistoria22->id_padre = 5;

$paginaHistoria221 = new stdClass();
$paginaHistoria221->id = 8;
$paginaHistoria221->nombre = "Historia 2.2.1";
$paginaHistoria221->url = "";
$paginaHistoria221->id_padre = 7;

$paginaHistoria222 = new stdClass();
$paginaHistoria222->id = 9;
$paginaHistoria222->nombre = "Historia 2.2.2";
$paginaHistoria222->url = "";
$paginaHistoria222->id_padre = 7;

$paginaHistoria3 = new stdClass();
$paginaHistoria3->id = 10;
$paginaHistoria3->nombre = "Historia 3";
$paginaHistoria3->url = "historia3/";
$paginaHistoria3->id_padre = 3;

$paginaHistoria31 = new stdClass();
$paginaHistoria31->id = 11;
$paginaHistoria31->nombre = "Historia 3.1";
$paginaHistoria31->url = "historia3/";
$paginaHistoria31->id_padre = 10;

$paginas = array(
    $paginaAcerca,
    $paginaContacto,
    $paginaHistoria,
    $paginaHistoria1,
    $paginaHistoria2,
    $paginaHistoria3,
    $paginaHistoria21,
    $paginaHistoria22,
    $paginaHistoria221,
    $paginaHistoria222,
    $paginaHistoria31
);

$paginasCategoria = [];

foreach ($paginas as $pagina){
    $paginasCategoria[$pagina->id_padre][] = $pagina;
}

$raiz = new Nodo(new Pagina("/", ""));
$arbol = new ArbolPaginas($raiz);

$arbol->crearArbol($paginasCategoria, 0, $raiz);
//print_r($raiz);
$arbol->recorrerArbol($raiz, 0);