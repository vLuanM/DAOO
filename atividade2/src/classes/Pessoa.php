<?php

    namespace Luanv\Atividade2\classes;

    class Pessoa{

        private String $nome;

        private int $idade;

        public function __construct(String $nome, int $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function __toString(){
            return "Nome: " . $this->getNome() . " Idade: " . $this->getIdade();
        }

    }
