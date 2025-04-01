<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    static string $listaCompra =  '';
    public function add(string $string):string
    {
        $listaCompra = $string;
        if($string != ''){
            return $listaCompra . ' x1';

        }
        return $listaCompra;
    }
}
