<?php

class Produto {

    private $nome;
    private $preco;

    public function __construct($n, $p){
        $this->nome = $n;
        $this->preco = $p;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }
}

$p1 = new Produto("Brownie", 8);
$p2 = new Produto("Cheesecake", 15);

echo $p1->getNome() . "<br>";
echo $p1->getPreco() . "<br>";

echo $p2->getNome() . "<br>";
echo $p2->getPreco();

?>