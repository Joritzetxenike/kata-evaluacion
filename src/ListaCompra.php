<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{
    public array $listaCompra =  [];
    public function add(string $string):string
    {
        $string = explode(' ', $string);
        if($string[0] != ''){

            if(array_key_exists($string[0], $this->listaCompra)){
                $this->listaCompra[$string[0]] = intval($this->listaCompra[$string[0]]) + intval($string[1]);
            }

            else{

                if(sizeof($string) > 1){
                    $this->listaCompra[$string[0]] = $string[1];
                }

                else{
                    $this->listaCompra[$string[0]] = 1;
                }

            }

        }
        return $this->imprimirLista();
    }

    private function imprimirLista():string
    {
        return $this->mapped_implode(', ', $this->listaCompra, ' x');

    }

    function mapped_implode($glue, $array, $symbol = '=') {

        return implode($glue, array_map(
                function($k, $v) use($symbol) {
                    return $k . $symbol . $v;
                },
                array_keys($array),
                array_values($array)
            )
        );
    }
}
