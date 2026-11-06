<?php

class Alianca {

    private $material;
    private $tamanho;
    private $limpa;

    public function __construct($m, $t){
        $this->material = $m;
        $this->tamanho = $t;
        $this->limpa = true;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($m){
        $this->material = $m;
    }

    public function getTamanho(){
        return $this->tamanho;
    }

    public function setTamanho($t){
        if($t > 0){
            $this->tamanho = $t;
        }
    }

    public function getLimpa(){
        return $this->limpa;
    }

    public function usar(){
        if($this->limpa == true){
            echo "Usando a aliança<br>";
            $this->limpa = false;
        }
    }

    public function limpar(){
        if($this->limpa == false){
            echo "Aliança limpa<br>";
            $this->limpa = true;
        }
    }
}

$a1 = new Alianca("prata", 16);

echo $a1->getMaterial() . "<br>";
echo $a1->getTamanho() . "<br>";

$a1->setTamanho(17);

$a1->usar();
$a1->limpar();

//teste invalido
$a1->setTamanho(-1);

?>