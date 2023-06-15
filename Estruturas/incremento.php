<?php
echo "Pós-incremento \n"; // ele retorna a variavel e depois ele incrementa.
$a = 5;
echo "Deve ser 5: " . $a++ . "\n";
echo "Deve ser 6: " . $a . "\n";

echo "Pré-incremento \n";// primeiro incrementa o valor a variavel, depois ele retorna a variavel.
$a = 5;
echo "Deve ser 6: " . ++$a . "\n";
echo "Deve ser 6: " . $a . "\n";


echo "Pós-decremento \n";// ele retorna a varaivel e depois decrementa ela
$a = 5;
echo "Deve ser 5: " . $a-- . "\n";
echo "Deve ser 4: " . $a . "\n";

echo "Pré-decremento \n";// decrementa a variavel e depois retorna ela 
$a = 5;
echo "Deve ser 4: " . --$a . "\n";
echo "Deve ser 4: " . $a . "\n";

?>