<?php
  
$arr = [1,2,3,4,5,6,7,8,9,10];

$qnt_elementos = count($arr);

for ($i=0; $i< $qnt_elementos; $i++){
    echo $arr[$i] . "\n";
}

foreach ($arr as $indice => $value) { // para cada elemento ele atribui a variavel value
    if($value == 2){
        break;
    }
    echo "valor do indice : " . $indice ." valor: ".  $value . "\n";
}

?>