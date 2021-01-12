<?php

namespace classes;

class Compra{
    private $itens = [];

    public function calcularTotal(){
        $valorTotal = 0;
        foreach($this->itens as $item){
            $valorTotal += ($item->preco * $item->quantidade);
        }
        return $valorTotal;
    }

    public function adicionarItem(Item $item){
        $this->itens[] = $item;
    }
}