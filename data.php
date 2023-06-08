<?php
        // DATAS
        // FORMA DE CHAMARMOS A DATA EM PHP
        date_default_timezone_set('America/Sao_Paulo');// Para adicionarmos a hora local do pais, temos que utilizar essa função 

        $date = date("d/m/Y"); // armazenando a data em uma variavel.
        $hour = date("H:i:s");
        $dateFull = date("d/m/Y H:i:s");


    echo date("d\n"); // dia atual
    echo date("m\n"); //mes atual em numero
    echo date("M\n"); // mes atual escrito
    echo date("y\n"); // ano atual
    echo date("Y\n"); // ano atual completo
    echo date("d/m/Y\n"); //dia,mes e ano 
    echo $date;

    echo date("\nH\n"); // hora atual do sistema
    echo date("i\n"); // minutos atual
    echo date("s\n"); // segundos atual

    echo date("H:i:s\n"); // dia atual
    echo $hour;

    echo $dateFull;


?>
