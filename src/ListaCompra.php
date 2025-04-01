<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    public string $listaCompra =  '';
    public function add(string $string):string
    {

        if($string != ''){

            if(strpos($string, ' ')){
                $string = explode(' ', $string);
                return $this->listaCompra . $string[0] . ' x'. $string[1];

            }
            $this->listaCompra = $string;
            return $this->listaCompra . ' x1';

        }
        return $string;
    }
}
