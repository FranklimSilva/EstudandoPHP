<?php
// while precisa de uma condição para executar o codigo, ou seja, ele verifica primeiro a condição para que depois possa realizar o bloco de codigo

$frutas = ["banana","maça","pera","uva","melancia"];
$contador = count($frutas);
$i=0;

while ($i < $contador) {
    //validações
    // if($frutas[$i] == "pera"){ //quando atingir o elemento pera ele vai parar
    //     break;
    // }
    
    echo  $frutas[$i] ."\n";
    $i++;
}


//Do While executa pelo menos uma vez o bloco de codigo, e depois verifica a condição, ou seja, ele primeiro faz e depois verifica a condição que esta sendo imposta

do {
    echo  $frutas[$i] ."\n";
    $i++;
}
while ($i < $contador);


?>