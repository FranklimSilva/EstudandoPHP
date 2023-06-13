<?php
$bool = true && false; //false porque, o php avalia a atribuição, sendo assim quando temos uma expressão com valor verdadeiro e falso ele dara falso.
var_dump($bool);

$bool = true and false; //true, porque o php vai atribuir o true para a variavel por ordem de precedência,
// ao fazermos a verificação de verdadeiro e falso, é importante nos atentarmos a esse detalhe.
//$bool = (true && false); false, porque ele faria a resolução dentro do parenteses.
//$bool = ( true and (true && false)); false, porque ele iria resolvendo o que esta de dentro para fora.

var_dump($bool);

// Operadores logicos:
	
// 	$a and $b = E => Se as duas variaveis forem verdadeiras da True
// 	$a or $b = OU => Será verdadeira quando houver pelo menos uma variavel verdadeira
// 	$a xor $b = XOR => Será verdadeira o resultado quando uma unica variavel for True, mas não as duas.
// 	!$a = NÃO => Negação, o resultado será verdadeiro se a expressão no A for falsa
// 	$a && $b = E => Se as duas variaveis forem verdadeiras da True
// 	$a || $b = OU => Será verdadeira quando houver pelo menos uma variavel verdadeira



?>