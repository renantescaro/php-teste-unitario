<?php

namespace testes;

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use classes\Compra;
use classes\Item;

class CompraTest extends TestCase{
    public function testcalcularTotal(){
        $compra = new Compra();

        $compra->adicionarItem(new Item('Jogo de Copos', 10, 123));
        $compra->adicionarItem(new Item('Garfos', 2, 121));
        $compra->adicionarItem(new Item('Jogo de Copos', 10, 123));

        // certo
        $this->assertEquals(2702, $compra->calcularTotal(),'Valor total errado');

        // errado
        //$this->assertEquals(111, $compra->calcularTotal(),'Valor total errado');
    }
}