<?php
namespace classes;

class Paciente extends Pessoa {
    private float $imc;

    public function __construct(string $nome, int $idade, float $peso, float $altura)
    {
        parent::__construct($nome, $idade, $peso, $altura);
        IMC::calcula($this);
    }

    public function setIMC(float $imc) {
        $this->imc = $imc;
    }

    public function getIMC() {
        return $this->imc;
    }
}

?>
