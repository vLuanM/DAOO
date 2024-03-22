<?php 

    namespace Luanv\Atividade2\classes;

    use Luanv\Atividade2\interfaces\Funcionario;
use Psy\Util\Str;

    class Atleta extends Pessoa implements Funcionario{

        use IMC;
        
        private float $peso, $altura, $imc;

        private float $salario;

        private String $contrato;

        public function __construct(String $nome, int $idade, float $peso, float $altura, float $salario, String $contrato){
            parent::__construct($nome, $idade);
            $this->peso = $peso;
            $this->altura = $altura;
            $this->calculaImc();
            $this->salario = $salario;
            $this->contrato = $contrato;
            
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getImc(){
            return $this->imc;
        }
        
        public function setImc($imc){
            $this->imc = $imc;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function getContrato(){
            return $this->contrato;
        }

        public function setContrato($contrato){
            $this->contrato = $contrato;
        }

        public function mostrarSalario(): float{
            return $this->getSalario();
        }

        public function mostrarContrato(): String{
            return $this->getContrato();
        }

        function __toString()
        {
            return "Nome: " . $this->getNome() . " Idade: " . $this->getIdade() . " Peso: " . $this->getPeso() . " Altura: " . $this->getAltura() . " IMC: " . $this->getImc();
        }
    }