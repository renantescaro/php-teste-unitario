<?php

namespace classes;

class Item{
    public $nome;
    public $quantidade;
    public $preco;

    function __construct(string $nome, int $quantidade, float $preco){
        $this->nome       = $nome;
        $this->quantidade = $quantidade;
        $this->preco      = $preco;
    }
}