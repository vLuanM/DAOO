<?php

    namespace Luanv\Atividade2\classes\logs;
    use Luanv\Atividade2\classes\Pessoa;
    use Luanv\Atividade2\interfaces\Funcionario;
    use Luanv\Atividade2\classes\Medico;
    use Luanv\Atividade2\classes\Atleta;

    class Relatorio{

        public $pessoas = array();

        public function adicionar($pessoa){
            $this->pessoas[] = $pessoa;
        }

        public function imprime(){
            echo "\n -------------- Relatório -------------- \n";
            foreach($this->pessoas as $pessoa) $this ->log($pessoa); 
        }
        public function log($pessoa){
            echo $pessoa;

            if($pessoa instanceof Funcionario) $this->contrato($pessoa);
            
        }

        public function contrato(Atleta $pessoa){
            echo "\n---Contrato---\nContrato: " . $pessoa->mostrarContrato() . "\nSalario: ". $pessoa->mostrarSalario();
        }
    }
    

?>