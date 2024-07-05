<?php

namespace classes;

class IMC {
    public static function calcula(Paciente $paciente) {
        $imc = $paciente->getPeso() / ($paciente->getAltura() ** 2);
        $paciente->setIMC($imc);
    }

    public static function classifica(Paciente $paciente) {
        $imc = $paciente->getIMC();
        $idade = $paciente->getIdade();

        if ($idade > 18 && $idade < 25 && $imc > 18 && $imc < 25) {
            return "Saudável";
        } elseif ($idade >= 25 && $idade < 35 && $imc >= 20 && $imc <= 25) {
            return "Saudável";
        } elseif ($idade >= 35 && $idade < 45 && $imc >= 21 && $imc <= 26) {
            return "Saudável";
        } elseif ($idade >= 45 && $idade < 55 && $imc >= 22 && $imc <= 27) {
            return "Saudável";
        } elseif ($idade >= 55 && $idade < 65 && $imc >= 23 && $imc <= 28) {
            return "Saudável";
        } elseif ($idade >= 65 && $imc >= 24 && $imc <= 29) {
            return "Saudável";
        } else {
            return "Fora do peso normal";
        }
    }
}


?>
