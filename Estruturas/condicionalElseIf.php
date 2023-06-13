<?php

$nota = 8;

if($nota >= 7){ // Será executada se a condição for VERDADEIRA
    echo "Aluno(a) Aprovado!";
}
else if(($nota <7) && ($nota >= 4)){ // Nova condição a ser testada se a condição do If anterior testada não for verdadeira
    echo "Aluno(a) de recuperação!";
}
else{ // será executado se a condição for Falsa
    echo "Aluno(a) reprovado.";
}

?>