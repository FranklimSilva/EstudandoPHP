<?php

$arrayNumerico = [3,4,6,1,2,5];

$qnt_elementos_array = count($arrayNumerico); //6 elementos dentro do array 

//$i= 0;
// $posicaoAtual =0;

for($i=0; $i<$qnt_elementos_array -1; $i++){ // expressão 1, fazemos a inicialização de variável, expressão 2 e o booleano que será validado na continuação do loop, a expressão 3 atualiza o valor da variavel dependendo da expressao 2
    for ($PosicaoAtual=0; $PosicaoAtual <$qnt_elementos_array -$i -1 ; $PosicaoAtual++) { 
        
        $ProximaPosicao = $PosicaoAtual+1; //0

        if($arrayNumerico[$ProximaPosicao] < $arrayNumerico[$PosicaoAtual]){
           
            $auxiliar = $arrayNumerico[$PosicaoAtual];
            $arrayNumerico[$PosicaoAtual] = $arrayNumerico[$ProximaPosicao];
            $arrayNumerico[$ProximaPosicao] = $auxiliar;
        }
    }
}
print_r($arrayNumerico)."\n";
?>