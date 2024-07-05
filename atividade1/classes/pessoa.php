<?php
namespace classes;

class Pessoa {
    private string $nome;
    private int $idade;
    private float $altura, $peso;

    public function __construct(string $nome, int $idade, float $peso, float $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getAltura() {
        return $this->altura;
    }
}

?>
