<?php
  
$arr = [1,2,3,4,5,6,7,8,9,10];

$qnt_elementos = count($arr);

for ($i=0; $i< $qnt_elementos; $i++){
    echo $arr[$i] . "\n";
}

foreach ($arr as $indice => $value) { // para cada elemento ele atribui a variavel value
    //validações
    if($value % 2 == 0){ // se o valor do resto da divisão por 2 for igual a zero
        continue;
    }
    // if($value == 2){ // quando encontrar o valor da igualdade ele para a verificação
    //     break;
    // }


    echo "valor do indice : " . $indice ." valor: ".  $value . "\n";
}

?>