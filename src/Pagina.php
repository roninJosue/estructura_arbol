<?php
/**
 * Created by PhpStorm.
 * User: TIC2
 * Date: 9/6/2019
 * Time: 10:25
 */

namespace Clases;


class Pagina
{
    public $pagina;
    public $url;

    public function __construct($pagina, $url)
    {
        $this->pagina = $pagina;
        $this->url = $url;
    }

    public function mostrarPagina($nivel)
    {
        echo str_repeat(".", $nivel) . $this->pagina . "\n";
        if($this->url !=="")
            echo str_repeat("-", $nivel) . "url: " . $this->url . "\n";
    }

    /**
     * @return mixed
     */
    public function getPagina()
    {
        return $this->pagina;
    }

    /**
     * @param mixed $pagina
     */
    public function setPagina($pagina)
    {
        $this->pagina = $pagina;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


}