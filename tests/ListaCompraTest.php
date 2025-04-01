<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Calculator;
use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     *
     */
    public function addNothingReturnsVoidLIst():void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->add('');
        $this->assertEquals('', $result);
    }

    /**
     * @test
     *
     */
    public function addOneItemReturnsListWithOneItem():void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->add('pan');
        $this->assertEquals('pan x1', $result);
    }

    /**
     * @test
     *
     */
    public function addOneItemMultipleTimesReturnsListWithItem():void
    {
        $listaCompra = new ListaCompra();
        $result = $listaCompra->add('pan 2');
        $this->assertEquals('pan x2', $result);
    }

}
