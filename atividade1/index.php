<?php

    include 'autoload_namespaces.php';

    use classes\Paciente;
    use classes\IMC;

    $paciente = new Paciente("Michel", 23, 90, 1.90);
    echo IMC::classifica($paciente);

?>
