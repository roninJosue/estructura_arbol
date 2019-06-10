<?php

require "vendor\autoload.php";
use Clases\Nodo;
use Clases\Arbol;

$paginaAcerca = new stdClass();
$paginaAcerca->id = 9;
$paginaAcerca->nombre = "Acerda de";
$paginaAcerca->url = "";
$paginaAcerca->id_padre = 0;

$paginaContacto = new stdClass();
$paginaContacto->id = 8;
$paginaContacto->nombre = "Contacto";
$paginaContacto->url = "contacto/";
$paginaContacto->id_padre = 0;

$paginaHistoria = new stdClass();
$paginaHistoria->id = 4;
$paginaHistoria->nombre = "Historia";
$paginaHistoria->url = "";
$paginaHistoria->id_padre = 0;

$paginaHistoria1 = new stdClass();
$paginaHistoria1->id = 5;
$paginaHistoria1->nombre = "Historia 1";
$paginaHistoria1->url = "historia1/";
$paginaHistoria1->id_padre = 4;

$paginaHistoria2 = new stdClass();
$paginaHistoria2->id = 6;
$paginaHistoria2->nombre = "Historia 2";
$paginaHistoria2->url = "";
$paginaHistoria2->id_padre = 4;

$paginaHistoria21 = new stdClass();
$paginaHistoria21->id = 7;
$paginaHistoria21->nombre = "Historia 2.1";
$paginaHistoria21->url = "";
$paginaHistoria21->id_padre = 6;


$paginaHistoria22 = new stdClass();
$paginaHistoria22->id = 8;
$paginaHistoria22->nombre = "Historia 2.2";
$paginaHistoria22->url = "";
$paginaHistoria22->id_padre = 6;

$paginaHistoria221 = new stdClass();
$paginaHistoria221->id = 9;
$paginaHistoria221->nombre = "Historia 2.2.1";
$paginaHistoria221->url = "";
$paginaHistoria221->id_padre = 8;


$paginas = array(
    $paginaAcerca,
    $paginaContacto,
    $paginaHistoria,
    $paginaHistoria1,
    $paginaHistoria2,
    $paginaHistoria21,
    $paginaHistoria22,
    $paginaHistoria221,
);

$paginasCategoria = [];

foreach ($paginas as $pagina){
    $paginasCategoria[$pagina->id_padre][] = $pagina;
}

$raiz = new Nodo("/");
$arbol = new Arbol($raiz);

$arbol->crearArbol($paginasCategoria, 0, $raiz);
//print_r($raiz);
$arbol->recorrerArbol($raiz, 0);