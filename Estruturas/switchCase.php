<?php
// Switch Case = recebe um determinado valor, caso esse valor sejá atendido em alguma parte do Switch Case, o trecho de codigo é executado.
// diferente do IF o Switch case só avalia a questão de igualdade, se for igual ao valor de alguma opção ele executa.

$sorteio = rand(0,5); // a funcão rand é uma função randomica, onde o o primeiro parametro é o valor minimo e o segundo o valor maximo.

echo "Valor sorteado: " . $sorteio;

switch($sorteio){
    case 0:
        echo "=> Você ganhou 2 pontos.";
        break; // quando a condição for atendida ele faz com que pule para fora do Switch case
    case 1:
        echo "=> Você perdeu 1 ponto.";
        break;
    case 2:
        echo "=> Você ganhou um bônus!Parabens ganhou 3 pontos.";
        break;
    default:
        echo " => Jogue novamente!";
        break;
}


?>