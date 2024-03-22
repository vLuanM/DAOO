<?php

    require "../vendor/autoload.php";

    use Luanv\Atividade2\classes\Medico;
    use Luanv\Atividade2\classes\Atleta;
    use Luanv\Atividade2\classes\logs\Relatorio;

    $medico = new Medico("Luan", 20, "LvM123", "Cardiologista");
    $atleta = new Atleta("Diego", 35, 90, 1.90, 1000, "4 anos");
    $relatorio = new Relatorio();
    $relatorio->adicionar($medico);
    $relatorio->adicionar($atleta);

    $relatorio->imprime();

?>
