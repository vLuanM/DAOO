<?php

    namespace Luanv\Atividade2\classes;

    class Medico extends Pessoa{

        private String $crm, $especialidade;

        public function __construct(String $nome, int $idade, String $crm, String $especialidade){
            parent::__construct($nome, $idade);
            $this->crm = $crm;
            $this->especialidade = $especialidade;
        }

        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        public function getCrm(){
            return $this->crm;
        }

        public function setCrm($crm){
            $this->crm = $crm;
        }

        public function __toString(){
            return "Nome: " . $this->getNome() . " Idade: " . $this->getIdade() . " CRM: " . $this->getCrm() . " Especialidade: " . $this->getEspecialidade();
        }


    }

?>